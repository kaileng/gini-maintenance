<?php

namespace Gini\Module;

class Maintenance
{
    public static function setup()
    {
        //获取系统维护模块的状态信息
        $config = \Gini\Config::get('maintenance');

        $route = \Gini\CGI::route();
        $path = 'maintain';

        //维护模块开启
        if ($config['status'] && $config['status'] == 'on') {
            //判断$route是防止后续的模块不给他机会直接跳转，判断$route != $path是防止重定向跳转
            if ($route && $route != $path) {
                \Gini\CGI::redirect($path);
            }
        }
    }
}
