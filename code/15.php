<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25 0025
 * Time: 18:14
 */

require('./13.php');

$file = new File();
if ($file->cacheData('mk_cache')) {
    var_dump($file->cacheData('mk_cache'));
} else {
    echo('create cache error');
}