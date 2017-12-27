<?php

namespace App\Http\Controllers\Auth;
use Log;
use App\Http\Controllers\Controller;
use EasyWeChat\Factory;
class WechatController extends Controller
{
    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {

        $config = [
            'app_id' => 'wx3cf0f39249eb0xxx',
            'secret' => 'f1c242f4f28f735d4687abb469072xxx',

            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__ . '/wechat.log',
            ],
        ];

        $app = Factory::officialAccount($config);

        $response = $app->server->serve();

        // 将响应输出
        $response->send(); // Laravel 里请使用：return $response;
    }
}
