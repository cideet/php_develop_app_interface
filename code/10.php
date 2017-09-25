<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25 0025
 * Time: 17:00
 */

require('./09.php');

$arr = array(
    'id' => 1,
    'name' => '张三丰'
);

echo(Response::show1(200, 'success', $arr, 'xml'));
