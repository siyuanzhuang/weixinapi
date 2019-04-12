<?php
/**
 * Created by PhpStorm.
 * User: zhuangsiyuan
 * Date: 2019/4/11 0011
 * Time: 下午 5:04
 */
namespace EasySwoole\WeixinApi;
use EasySwoole\WeixinApi\WeiXin;

class WeixinApi
{
    private $instanceList = [];

    function weiXin()
	{
		if( $config ){
			$this->instanceList['weChat'] = new WeiXin();
		}
        if( isset( $this->instanceList['weChat'] ) ){
            return $this->instanceList['weChat'];
        } else{
            return null;
        }
    }
}