<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 12/8/2018
 * Time: 8:30 AM
 */

require ('./Model/OrderDao.php');
require_once ("BaseController.php");
class HistoryOrderController extends BaseController
{

    function index(){
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $idCustomer = $acc->id;
            $userName = $acc->username;
            $lstOrder = OrderDao::getListOrderByIdCustomer($idCustomer);
            $data = array("lstOrder" => $lstOrder, 'userName' => $userName);
            $this->render("HistoryOrder", "HistoryOrder", $data);
        }else{
            header("Location: /Account");
        }
    }

    function detail(){
        if(isset($_SESSION["user"])){
            $lstItemOfOrder = [];
            $acc = $_SESSION["user"];
            $userName = $acc->username;
            if(isset($_POST["idOrder"])){
                $lstItemOfOrder = OrderDao::getDetailOrder($_POST["idOrder"]);
            }
            $data = array("lstItemOfOrder" => $lstItemOfOrder, 'userName' => $userName);
            $this->render("DetailOrder", "DetailOrder", $data);
        }else{
            header("Location: /Account");
        }
    }
}