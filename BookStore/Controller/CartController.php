<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/18/2018
 * Time: 8:35 AM
 */

require ("./Model/BookDao.php");
require ("./Model/AccountDao.php");
require_once ("BaseController.php");
class CartController extends BaseController
{
    var $amount = 0;

    function index(){
        $cart = null;
        if(isset($_SESSION["cart"])){
            $cart = $_SESSION["cart"];
        }
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
            $data = array('userName' => $userName, 'cart' =>$cart);
            $this->render('Cart', 'Cart', $data);
        }else{
            $data = array('cart' =>$cart);
            $this->render('Cart', 'Cart', $data);
        }
    }

    function addCartItem(){
        $cart = array();
        if(isset($_SESSION["cart"])){
            $cart = $_SESSION["cart"];
        }
        if(isset($_GET["idBook"])) {
            $idBook = $_GET["idBook"];
            $book = BookDao::getBookById($idBook);
            if ($book != null) {
                $added = false;
                $itemCart = new EItemCart($book->id, $book->Title, $book->price, $book->image, 1);
                foreach ($cart as $value){
                     if($value->id == $book->id){
                         $value->quantity += $itemCart->getQuantity();
                         $added = true;
                     }
                     $this->amount++;
                 }
                 if(!$added){
                     $cart[] = $itemCart;
                     $this->amount++;
                 }
            }
            $_SESSION["cart"] = $cart;
            echo $this->amount;
        }
    }

    function updateCartItem(){
        $total = 0;
        if(isset($_SESSION["cart"])){
            $cart = $_SESSION["cart"];
        }
        if(isset($_POST["idBook"]) && isset($_POST["quantity"])) {
            $idBook = $_POST["idBook"];
            $quantity = $_POST["quantity"];
            foreach ($cart as $value){
                if($value->id == $idBook){
                    $value->quantity = $quantity;
                }
                $total += $value->quantity*$value->price;
            }
            $_SESSION["cart"] = $cart;
            echo number_format($total, 2);
        }
    }

    function removeCartItem(){
        $total = 0;
        if(isset($_SESSION["cart"])){
            $cart = $_SESSION["cart"];
        }
        if(isset($_POST["idBook"])) {
            $idBook = $_POST["idBook"];
            foreach ($cart as $key => $value){
                if($value->id == $idBook){
                    unset($cart[$key]);
                }
            }
            $_SESSION["cart"] = $cart;
        }
        foreach ($_SESSION["cart"] as $value){
            $total += $value->quantity*$value->price;
        }
        echo $total;
    }
}