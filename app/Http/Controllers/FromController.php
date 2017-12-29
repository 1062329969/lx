<?php

namespace App\Http\Controllers;
use Log;
class FromController extends Controller{
        //定义微信菜单
        public function index()
        {
            $app = app('wechat.official_account');
            $buttons = [
                [
                    "type" => "click",
                    "name" => "今日美食",
                    "key" => "V1001_TODAY_MUSIC"
                ],
                [
                    "name" => "菜单",
                    "sub_button" => [
                        [
                            "type" => "view",
                            "name" => "搜索",
                            "url" => "http://www.baidu.com/"
                        ],
                        [
                            "type" => "view",
                            "name" => "视频",
                            "url" => "http://v.qq.com/"
                        ],
                        [
                            "type" => "click",
                            "name" => "赞一下我们",
                            "key" => "V1001_GOOD"
                        ],
                    ],
                ],
            ];
            $app->menu->create($buttons);
            //var_dump($res);
        }

        //模板消息
        public function modelx(){
            $app = app('wechat.official_account');
            $app->template_message->send([
                'touser'    => 'ox_re1Zh30FKCubPhNHeIzdOvj3A',
                'template_id'  => 'FWE6QwbqtJduWK4zoSlYRuVDK260kO6NO-lQUbDpXDY',
                'url'       => 'https://easywechat.org',
                'data'      => [
                    "first"  => "恭喜你购买成功！",
                    "name"   => "巧克力",
                    "price"  => "39.8元",
                    "remark" => "欢迎再次购买！",
                ]
            ]);
        }


        //用户管理
        public function user(){
            $app = app('wechat.official_account');
            //var_dump($app->user->get('ox_re1Zh30FKCubPhNHeIzdOvj3A'));
            $app->remark('ox_re1Zh30FKCubPhNHeIzdOvj3A', "僵尸粉");
        }
    }

?>