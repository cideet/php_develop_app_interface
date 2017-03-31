<?php

/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/3/31
 * Time: 19:35
 */
class Response
{
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

}