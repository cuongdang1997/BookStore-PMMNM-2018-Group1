<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/8/2018
 * Time: 8:44 PM
 */

require ("./Model/BookDao.php");
require_once ("BaseController.php");

class HomeController extends BaseController
{

    public function index()
    {
        $lstBook = BookDao::getListBook();
        $userName = '';
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
        }
        $data = array('userName' => $userName, 'lstBook' => $lstBook);
        $this->render('Index', 'Home', $data);
    }


}