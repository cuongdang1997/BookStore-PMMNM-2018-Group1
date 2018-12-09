<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 12/8/2018
 * Time: 1:43 PM
 */

require_once ("BaseController.php");
class JournalController extends BaseController
{

    public function index()
    {
        $userName = '';
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
        }
        $data = array('userName' => $userName);
        $this->render('Journal', 'Journal', $data);
    }
}