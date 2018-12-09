<?php
/**
 * Created by PhpStorm.
 * Author: Quyên & Xuân
 * Date: 11/22/2018
 * Time: 9:04 PM
 */
require_once ('./Model/Category.php');
include_once ("BaseController.php");
class CategoryController extends  BaseController
{
    function index(){
        if(isset($_SESSION["admin"])){
            // nếu submit add thì thực hiện đoạn sau
            $addFlg = (isset($_POST['addCategory']) && $_POST['addCategory'] == "Add")?true:false;
            $updFlg = (isset($_POST['updCategory']) && $_POST['updCategory'] == "Update")?true:false;
            $transitUpdate = (isset($_GET['func']) && $_GET['func'] == "Update")?true:false;
            $delFlg = (isset($_GET['func']) && $_GET['func'] == "Delete")?true:false;

            // click add
            if($addFlg) {
                $CategoryName = isset($_POST['categoryName'])?$_POST['categoryName']:"";
                if($CategoryName != "") {
                    Category::insCategory($CategoryName);
                } else {
                    // Thông báo lỗi ra mh
                }
            }

            // click link chuyển sang mh sửa
            if($transitUpdate) {
                $CatId = isset($_GET['catId'])?$_GET['catId']:"";
                if($CatId != "") {
                    $dataUpd = Category::getCategoryById($CatId);
                    $data = array("dataUpd" => $dataUpd);


                    // điều hướng tới trang view
                    $this->render("category_update", "CategoryDao", $data);
                } else {
                    // Thông báo lỗi ra mh
                }
            }

            // click sửa
            if($updFlg) {
                $CategoryName = isset($_POST['categoryName'])?$_POST['categoryName']:"";
                $categoryId = isset($_POST['categoryId'])?$_POST['categoryId']:"";
                if($CategoryName != "" && $categoryId != "") {
                    Category::updCategory($categoryId, $CategoryName);
                } else {
                    // Thông báo lỗi ra mh
                }
            }

            // Khi click link Xóa
            if($delFlg) {

                $categoryId = isset($_GET['catId'])?$_GET['catId']:"";
                Category::delCategory($categoryId);
                header("Location:Category");
            }


            // Lấy data category để show lên screen
            $lstCategory = Category::getListCategory();
            $data = array("lstCategory" => $lstCategory);


            // điều hướng tới trang view
            $this->render("category", "Category", $data);
        }else{
            header("Location: ../Admin/Account");
        }
    }
}