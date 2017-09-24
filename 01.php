<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 2017/9/24
 * Time: 0:49
 */

$arr = array(
    'id' => 1,
    'name' => 'zhangsanfeng'
);

echo json_encode($arr);
$data = '张三丰';
$newData = iconv('UTF-8', 'GBK', $data);
echo('<br>' . $newData . '<br>');
if (!json_encode($newData)) {
    echo 'JSON只能是UTF-8';
}
