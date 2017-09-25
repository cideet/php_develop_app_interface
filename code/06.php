<?php

/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/9/24
 * Time: 17:32
 */
class Response
{
    /**
     * 按XML方式输出通信数据
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
        return $xml;
    }

    public static function xmlToEncode($data)
    {
        $xml = '';
        $attr = '';
        foreach ($data as $key => $value) {
            // XML的节点，不能为数字
            if (is_numeric($key)) {
                $attr = ' id="' . $key . '"';
                $key = 'item';
            }
            $xml .= '<' . $key . $attr . '>';
            $xml .= is_array($value) ? self::xmlToEncode($value) : $value; //递归
            $xml .= '</' . $key . '>';
        };
        return $xml;
    }
}

?>
