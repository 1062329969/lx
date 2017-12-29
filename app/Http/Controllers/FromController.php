<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;



use Log;
    class FromController extends Controller
    {
        public function index()
        {
            $app = app('wechat.official_account');
            $buttons = [
                [
                    "type" => "click",
                    "name" => "今日歌曲",
                    "key" => "V1001_TODAY_MUSIC"
                ],
                [
                    "name" => "菜单",
                    "sub_button" => [
                        [
                            "type" => "view",
                            "name" => "搜索",
                            "url" => "http://www.soso.com/"
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
            $res = $app->menu->create($buttons);

            var_dump($res);

        }
    }

?>