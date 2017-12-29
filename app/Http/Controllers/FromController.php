<?php

namespace App\Http\Controllers;
use Log;
class FromController extends Controller{
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
            $matchRule = [
                "tag_id"=>"2",
                "sex"=>"1",
                "country"=>"中国",
                "province"=>"广东",
                "city"=>"广州",
                "client_platform_type"=>"2",
                "language"=>"zh_CN"
            ];


            $app->menu->add($buttons,$matchRule);
            //var_dump($res);

        }
    }

?>