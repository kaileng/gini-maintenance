<?php

namespace Gini\Controller\CGI;

class Maintain extends \Gini\Controller\CGI
{
    public function __index()
    {
    	//获取系统维护模块的状态信息
        $config = \Gini\Config::get('maintenance.default');

        //跳转到维护页面
    	return \Gini\IoC::construct('\Gini\CGI\Response\HTML', V('maintenance', array('maintan_end_date' => $config['maintan_end_date'])));
    }
}