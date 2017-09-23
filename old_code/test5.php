<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/3/31
 * Time: 21:57
 */

require 'response.php';

$data = array(
    'id' => 1,
    'name' => 'zhangsanfen',
    'score' => array(78, 56, 99),
    'test' => array(11, 22, array(44, 55))
);


Response::show2(200, 'success', $data);
//对应网址：http://127.0.0.27/test5.php?format=xml
//对应网址：http://127.0.0.27/test5.php?format=json
//对应网址：http://127.0.0.27/test5.php?format=array


