<?php 


use EasyWeChat\Factory;

$config = [
    'app_id' => 'wx3cf0f39249eb0xxx',
    'secret' => 'f1c242f4f28f735d4687abb469072xxx',

    'response_type' => 'array',

    'log' => [
        'level' => 'debug',
        'file' => __DIR__.'/wechat.log',
    ],
];

$app = Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
$response->send(); // Laravel 里请使用：return $response;


 ?>