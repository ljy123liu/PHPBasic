<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/21/16
 * Time: 4:46 PM
 */

namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index() {
        echo 'user.index';
    }

    public function edit() {
        echo 'user.edit';
    }

    public function login() {
        echo 'user.login';
    }
}