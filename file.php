<?php

/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/4/1
 * Time: 6:33
 */
class File
{
    private $_dir;
    const EXT = '.txt';

    public function __construct()
    {
        $this->_dir = dirname(__FILE__) . '/files/';
    }

    public function cacheData($key, $value = '', $path = '')
    {
        $filename = $this->_dir . $path . $key . self::EXT;
        if ($value !== '') {  //将value写入缓存
            if(is_null($value)){
                return @unlink($filename);  //删除缓存
            }
            $dir = dirname($filename);
            if (!is_dir($dir)) {
                mkdir($dir, 0777);   //创建目录
            }
            return file_put_contents($filename, json_encode($value));  //将$value写入缓存
        }
        if(!is_file($filename)){
            return FALSE;
        }else{
            return json_decode(file_get_contents($filename),true);
        }
    }
}