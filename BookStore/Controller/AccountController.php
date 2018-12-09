<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/12/2018
 * Time: 3:03 PM
 */

require ('./Model/AccountDao.php');
require_once ("BaseController.php");
class AccountController extends BaseController
{
    var $error = '';
    public function index(){
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
            $accProfile = AccountDao::getProfileAccount($userName);
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

    public function checkLogin(){
        if(isset($_POST["userName"]) && isset($_POST["password"])){
            $userName = $_POST["userName"];
            $password = $_POST["password"];
            $acc = AccountDao::checkLogin($userName, $password);
            if($acc != null){
                $_SESSION['user'] = $acc;
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
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
            $accProfile = AccountDao::getProfileAccount($userName);
            $data = array('accProfile' => $accProfile);
            $this->render('Profile', 'Profile', $data);
        }
    }

    function logout(){
        if(isset($_SESSION["user"])){
            unset($_SESSION["user"]);
            header("location: ../Account");
        }
    }

    function getProfile(){
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
            $accProfile = AccountDao::getProfileAccount($userName);
            print_r($accProfile);
        }
        echo '';
    }

    function updateProfile(){
        if(isset($_SESSION["user"])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = $_POST["id"];
                $username = $_POST["username"];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phoneNumber = $_POST['phoneNumber'];
                $email = $_POST['email'];
                $profile= new EAccountDetail($id, $username, $name, $address, $phoneNumber, $email);
                AccountDao::updateProfile($profile);
                header("Location: ../Account");
            }
        }else{
            header("Location: ../Account");
        }
    }
}