<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25 0025
 * Time: 11:19
 */

require('./06.php');

$data = array(
    'id' => 1,
    'name' => 'zhangsanfeng'
);
echo(Response::xmlEncode(200, 'success', $data));