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


