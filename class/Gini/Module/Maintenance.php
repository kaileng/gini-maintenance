<?php

namespace Gini\Module;

class Maintenance
{
    public static function setup()
    {
        //获取系统维护模块的状态信息
        $config = \Gini\Config::get('maintenance.default');

        $route = \Gini\CGI::route();
        $path = 'maintain';

        //维护模块开启
        if ($config['status'] && $config['status'] == 'on') {
            //避免重定向跳转
            if ($route && $route != $path) {
                \Gini\CGI::redirect($path);
            }
        }else{
            //维护模块关闭时访问维护页自动跳转到首页
            if ($route == $path) {
                \Gini\CGI::redirect('/');
            }
        }
    }
}
