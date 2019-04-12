<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/12 0012
 * Time: 上午 10:25
 */
namespace EasySwoole\WeiXin\WeiXin;

use EasySwoole\WeiXin\Utility;

class WeiXin
{
    /*
     * 创建自定义菜单
     */
    public function makeMenu()
    {
        $token = $this->getToken();
    }
    /*
     * 获取token
     */
    public function getToken()
    {
        $appid = 'wx5a1f8620c6b77427';
		$appsecret = '3f0dbcf52969ab2295d96e7ace284b10';
        $url = $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$appsecret;
        $data = EasySwoole\WeiXin\Utility::dataGet($url);
        $content = json_decode(data,true);
        return $content['access_token'];
    }
}