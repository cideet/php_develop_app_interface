<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/9/24
 * Time: 14:06
 */

function xml()
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
}

xml();