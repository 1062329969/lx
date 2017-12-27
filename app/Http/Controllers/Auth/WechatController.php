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
            'app_id' => 'wx083fd9c68238faaf',
            'secret' => '58a5ad9bbcaaab65afdce9bee1fdc545',

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
