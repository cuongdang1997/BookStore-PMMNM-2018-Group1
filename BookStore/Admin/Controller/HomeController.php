<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/24/2018
 * Time: 2:42 PM
 */

require_once ("./Model/Dashboard.php");
include_once ("BaseController.php");
class HomeController extends BaseController
{
    /**
     * return view dashboard
     */
    function index(){
        if(isset($_SESSION["admin"])){
            $totalRevenue= Dashboard::getTotalRevenue();
            $totalCustomer = Dashboard::getTotalCustomer();
            $data = array('totalRevenue' => $totalRevenue, 'totalCustomer' => $totalCustomer);
            $this->render("Index", "Home", $data);
        }else{
            header("Location: ../Admin/Account");
        }
    }
}