<?php
namespace App\Http\Controllers;

class ShareController extends Controller{
    //微信分享
    public function Share(){

    }
}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSSDK的使用</title>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <script type="text/javascript" charset="utf-8">
        wx.config({
            debug: true,
            appId: 'wx3cf0f39249eb0e60',
            timestamp: 1430009304,
            nonceStr: 'qey94m021ik',
            signature: '4F76593A4245644FAE4E1BC940F6422A0C3EC03E',
            jsApiList: ['onMenuShareQQ', 'onMenuShareWeibo']
        });
    </script>
</body>
</html>
