<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Log;
use EasyWeChat\Kernel\Messages\Text;
use EasyWeChat\Kernel\Messages\Video;
use EasyWeChat\Kernel\Messages\Message;
use EasyWeChat\Kernel\Messages\News;
use EasyWeChat\Kernel\Messages\NewsItem;




class WeChatController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $app = app('wechat.official_account');
        $app->server->push(function($message){
            return "你好";
        });

        $app->server->push(function($message){
            return "你发送了一张图片";
        },Message::IMAGE);
        return  $app->server->serve();
      //$arr ->send();
    }

    public function dede()
    {

        $text = new Text(1);
        $text->content = '您men 好！overtrue。';
        dd($text);
    }

    public function news()
    {

        $app = app('wechat.official_account');
        $app->user->remark('ox_re1Zh30FKCubPhNHeIzdOvj3A', "僵尸粉");
        return $app->server->serve();
    }

}