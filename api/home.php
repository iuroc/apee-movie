<?php

/**
 * 主页推荐数据
 */
require 'Poncon.php';

use Poncon\Poncon;

$poncon = new Poncon;
$data_1 = file_get_contents('https://pcw-api.iqiyi.com/strategy/pcw/data/topHomeData');
$data_2 = json_decode($data_1, true)['data']['formatData']['data'];
$data = [];
foreach ($data_2 as $key => $value) {
    $data[] = [
        'key' => $key,
        'value' => $value
    ];
}

print_r($data);
