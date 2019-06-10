<?php
/**
 * Created by PhpStorm.
 * User: urchinmac
 * Date: 2019-06-09
 * Time: 17:27
 */
namespace app\admin\controller;

use think\Facade\Db;
use think\View;
use think\facade\Env;

class admin {
    public function index(view $view)
    {
        $root = '../';
        $view->assign('root',$root);
        return $view->fetch();
    }
    public function login(view $view)
    {
        $view->assign('username','123');
        return $view->fetch();
    }

}
