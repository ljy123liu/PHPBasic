<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/8/22
 * Time: 下午9:46
 */

$data = array(
    'sex' => 'man',
    'name' => 'liujianyong',
    'age' => 25
);

$respone = array(
    'code' => 200,
    'message' => 'success for request',
    'result' => $data
);

echo json_encode($respone);