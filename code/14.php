<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25 0025
 * Time: 18:14
 */

require('./13.php');

$data = array(
    'id' => 1,
    'name' => '张三丰'
);

$file = new File();
if ($file->cacheData('mk_cache', $data)) {
    echo('create cache sussess');
} else {
    echo('create cache error');
}