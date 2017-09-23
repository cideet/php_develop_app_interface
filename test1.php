<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/3/31
 * Time: 19:40
 */

require 'response.php';

$arr = array(
    'id' => 1,
    'name' => 'zhangsanfen'
);

Response::json(200, '数据返回成功', $arr);
