<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/9/2018
 * Time: 8:58 AM
 */

require("./Model/User.php");
class UserController extends  User
{
    public function index() {
        $s = parent::getString();
        include("View/user.php");
    }


}