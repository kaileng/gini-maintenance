<?php

namespace Gini\Module;

class Maintenance
{
    public static function setup()
    {
        //获取系统维护模块的状态信息
        $config = \Gini\Config::get('maintenance.default');

        //维护模块开启
        if($config['status'] && $config['status'] == 'on') {
            $route = \Gini\CGI::route();
            $path = 'maintain';
            //避免重定向跳转
            if ($route != $path) {
                \Gini\CGI::redirect($path);
            }
        }
    }
}
