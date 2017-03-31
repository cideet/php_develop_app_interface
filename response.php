<?php

/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/3/31
 * Time: 19:35
 */
class Response
{
    const TYPE = 'json';
    /**
     * 按JSON方式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * return string
     */
    public static function json($code, $message = '', $data = array())
    {
        if (!is_numeric($code)) {
            return '';
        }
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        echo(json_encode($result));
        //exit;
    }

    public static function xml()
    {
        header("Content-Type:text/xml");
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<root>';
        $xml .= '<code>200</code>';
        $xml .= '<message>数据返回成功</message>';
        $xml .= '<data>';
        $xml .= '<id>1</id>';
        $xml .= '<name>zhangsanfen</name>';
        $xml .= '</data>';
        $xml .= '</root>';
        echo $xml;
        //exit;
    }

    /**
     * 按xml方式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * return string
     */
    public static function xmlEncode($code, $message, $data = array())
    {
        if (!is_numeric($code)) {
            return '';
        }
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        header("Content-Type:text/xml");
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<root>';
        $xml .= self::xmlToEncode($result);
        $xml .= '</root>';
        echo $xml;
    }

    public static function xmlToEncode($data)
    {
        $xml = '';
        $attr = '';
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                $attr = ' id="' . $key . '"';
                $key = 'item';
            }
            $xml .= '<' . $key . $attr . '>';
            $xml .= is_array($value) ? self::xmlToEncode($value) : $value;
            //$xml .= $value;
            $xml .= '</' . $key . '>';
            //$xml .= '</{$key}>';
        };
        return $xml;
    }

    /**
     * 按综合方式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * @param string $type 数据类型
     * return string
     */
    public static function show1($code, $message, $data = array(), $type)
    {
        if (!is_numeric($code)) {
            return '';
        }
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        if ($type == 'json') {
            self::json($code, $message, $data);
            exit;
        } elseif ($type == 'array') {
            var_dump($result);
        } elseif ($type == 'xml') {
            self::xmlEncode($code, $message, $data);
            exit;
        } else {
            // TODO
        }
    }



    public static function show2($code, $message, $data = array(), $type=self::TYPE)
    {
        if (!is_numeric($code)) {
            return '';
        }
        $type = isset($_GET['format']) ? $_GET['format'] : self::TYPE;
        $result = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        if ($type == 'json') {
            self::json($code, $message, $data);
            exit;
        } elseif ($type == 'array') {
            var_dump($result);
        } elseif ($type == 'xml') {
            self::xmlEncode($code, $message, $data);
            exit;
        } else {
            // TODO
        }
    }

}