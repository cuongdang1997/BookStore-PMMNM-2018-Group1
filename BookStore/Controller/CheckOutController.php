<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/22/2018
 * Time: 10:39 PM
 */

require ("./Model/AccountDao.php");
require ("./Model/CartDao.php");
require_once ("BaseController.php");
class CheckOutController extends BaseController
{
    function index(){
        $cart = null;
        if(isset($_SESSION["user"])){
            if(isset($_SESSION["cart"])){
                $cart = $_SESSION["cart"];
            }
            $acc = $_SESSION["user"];
            $userName = $acc->username;
            $accProfile = AccountDao::getProfileAccount($userName);
            $data = array('userName' => $userName, 'cart' =>$cart, 'accProfile' => $accProfile);
            $this->render('CheckOut', 'CheckOut', $data);
        }else{
            header("location: ../BookStore/Account");
        }
    }

    function checkOut(){
        if(isset($_SESSION["user"])){
            $cart = $_SESSION["cart"];
            $acc = $_SESSION["user"];
            $idCustomer = $acc->id;
            CartDao::addOrderToDB($cart , $idCustomer);
            unset($_SESSION["cart"]);
            echo "Thank you for ordering we will delivery within 7 days!";
        }else{
            header("location: ../BookStore/Account");
        }
    }

}