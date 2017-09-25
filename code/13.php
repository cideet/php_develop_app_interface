<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/25 0025
 * Time: 18:05
 */
class File
{
    private $_dir;          //缓存的存储目录
    const EXT = '.txt';     //缓存的后缀

    public function __construct()
    {
        $this->_dir = dirname(__FILE__) . '/14_files/';  //缓存的存储目录

    }

    public function cacheData($key, $value = '', $path = '')
    {
        $filename = $this->_dir . $path . $key . self::EXT;
        if ($value !== '') {
            $dir = dirname($filename);
            if (!is_dir($dir)) {    //如果目录不存在
                mkdir($dir);        //创建目录
            }
            return file_put_contents($filename, json_encode($value));  //将字符串写入缓存
        }
        if (!is_file($filename)) {
            return false;
        } else {
            return json_decode(file_get_contents($filename), true);
        }
    }
}