<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/8/2018
 * Time: 8:05 PM
 */

require_once ("BaseController.php");
class LibraryController extends BaseController
{

    public function index(){
        $userName = '';
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
        }
        $data = array('userName' => $userName);
        $this->render('Library', 'Library', $data);
    }
}