<?php

/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/9/24
 * Time: 17:32
 */
class Response
{
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
        header("Conent-Type:text/xml");
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    }
}