<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/8/2018
 * Time: 11:36 AM
 */

require_once('BaseController.php');
require_once('Model/BookDao.php');
require_once('Model/CategoryDao.php');
class BookController extends BaseController
{
    public function index()
    {
        $userName = '';
        if(isset($_SESSION["user"])){
            $acc = $_SESSION["user"];
            $userName = $acc->username;
        }
        if(isset($_GET['catId']) && $_GET['catId'] != ""){
            $catId = $_GET['catId'];
            $lstBooks = BookDao::getListBookByCategory($catId);
        } else if(isset($_GET["searchText"])){
            $searchText = $_GET["searchText"];
            $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
            $check = preg_match($pattern, $searchText);
            if (!$check) {
                $lstBooks = BookDao::getListBookByTitle($searchText);
            } else {
                $lstBooks = [];
            }
        } else {
            $lstBooks = BookDao::getListBook();
        }

        $lstCategory = CategoryDao::getListCategory();
        $dataView = array(
            'lstCategory' => $lstCategory,'lstBooks'   => $lstBooks, 'userName' => $userName
        );
        $this->render('Books', 'Book',$dataView);
    }
}