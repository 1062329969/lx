<?php
namespace App\Http\Controllers;

class ShareController extends Controller{
    //JSSDK
    public function Share(){
        $app = app('wechat.official_account');
      //  $app->jssdk->setUrl($_GET['url']);
        $config = $app->jssdk->buildConfig(['onMenuShareQQ','onMenuShareWeibo'],true,false,true);
        //var_dump($config);
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
        wx.config({!! $config !!});
    </script>
</body>
</html>
