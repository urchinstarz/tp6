<?php
/**
 * Created by PhpStorm.
 * User: urchinmac
 * Date: 2019-06-08
 * Time: 22:44
 */

namespace app\index\controller;
use app\index\model\User;

use think\View;
class ModelTest
{
    public function demo1(view $view,user $user)
    {
        $sql = ['userid'=>2];

        $res = $user->find($sql);
//        dump($res->username);

        $view->assign('username',$res->username);

//        dump(request()->app());

//        return $view->fetch(request()->app().'/'.request()->controller());
        return $view->fetch(request()->app().'/'.request()->action());
    }
}