<?php
/**
 * Created by PhpStorm.
 * User: urchinmac
 * Date: 2019-06-08
 * Time: 22:40
 */

namespace app\index\model;

use think\Model;
class User extends Model
{
    protected $table = 'user';
    protected $pk = 'userid';
}