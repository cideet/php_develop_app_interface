<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/9/24
 * Time: 10:23
 */

require './02.php';

$arr = array(
    'id' => 1,
    'name' => '张三丰'
);

Response::json(200, '数据返回成功', $arr);