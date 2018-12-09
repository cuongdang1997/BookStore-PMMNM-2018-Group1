<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/22/2018
 * Time: 9:04 PM
 */

require_once ("./Model/Account.php");
include_once ("BaseController.php");
class AccountController extends BaseController {
    var $error = '';

    /**
     * return view profile of account
     */
    public function index(){
        if(isset($_SESSION["admin"])){
            $acc = $_SESSION["admin"];
            $userName = $acc->username;
            $accProfile = Account::getProfileAccount($userName);
            $data = array('accProfile' => $accProfile, 'userName' => $userName);
            $this->render('Profile', 'Profile', $data);
        }else {
            if($this->error != ''){
                $data = array('error' => $this->error);
            }else{
                $data = array();
            }
            $this->render('Login', 'Login', $data);
        }
    }

    /**
     * check login
     */
    public function checkLogin(){
        if(isset($_POST["userName"]) && isset($_POST["password"])){
            $userName = $_POST["userName"];
            $password = $_POST["password"];
            $acc = Account::checkLogin($userName, $password);
            if($acc != null){
                $_SESSION['admin'] = $acc;
                header("location: ../Home");
            }else{
                $this->error = "The username or password is incorrect";
                header("location: ../Account");
                //$error = "The username or password is incorrect";
                /*$data = array('error' => $error);
                $this->render('Login', 'Login', $data);*/
            }
        }else{
            header("location: /Account");
        }
    }


    public function profile(){
        if(isset($_SESSION["admin"])){
            $acc = $_SESSION["admin"];
            $userName = $acc->username;
            $accProfile = Account::getProfileAccount($userName);
            $data = array('accProfile' => $accProfile);
            $this->render('Profile', 'Profile', $data);
        }
    }

    /**
     * function logout
     */
    function logout(){
        if(isset($_SESSION["admin"])){
            unset($_SESSION["admin"]);
            header("location: ../Account");
        }
    }

}