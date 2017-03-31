<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/3/31
 * Time: 21:57
 */

require 'file.php';

$data = array(
    'id' => 1,
    'name' => 'zhangsanfen',
    'score' => array(78,56,99),
    'test'=>array(11,22,array(44,55))
);

$file = new File();
if($file->cacheData('index_mk_che',$data)){
    echo 'succsess';
}else{
    echo 'error';
}

