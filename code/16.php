<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25 0025
 * Time: 19:21
 */

require('./13.php');

$file = new File();
if ($file->cacheData('mk_cache', null)) {
    echo('delete success');
} else {
    echo('delete error');
}