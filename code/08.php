<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25 0025
 * Time: 11:21
 */

require('./06.php');

$data = array(
    'id' => 1,
    'name' => 'zhangsanfeng',
    'array' => array(4,5,6,777)
);
echo(Response::xmlEncode(200, 'success', $data));