<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/22/2018
 * Time: 9:18 PM
 */

require_once ("./Model/Order.php");
include_once ("BaseController.php");
class OrderController extends BaseController
{

    /**
     * return view Orderlist
     */
    function index(){
        if(isset($_SESSION["admin"])){
            $lstOrder = Order::getListOrder();
            $data = array("lstOrder" => $lstOrder);
            $this->render("Order", "Order", $data);
        }else{
            header("Location: ../Admin/Account");
        }
    }

    /**
     * update status of order
     */
    function updateOrder(){
        if(isset($_POST["idOrder"]) && isset($_POST["status"])){
            $idOrder = $_POST["idOrder"];
            $status = !$_POST["status"];
            echo Order::updateOrder($idOrder, $status);
        } else{
            echo false;
        }
    }
}