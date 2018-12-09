<?php

ob_start();

require_once('config/database.php');
require_once ('./config/DBConnect.php');
require_once ('entity/E_Account.php');
require_once ('entity/E_ItemCart.php');
session_start();
/*Database::connect();*/


if(isset($_GET['url'])){
    $URL = $_GET['url'];
}else{
    $URL = null;
}

$URL = rtrim($URL, '/\\');

	// Xử lý đường dẫn thành Controller, Action
	$arr_url = explode('/', $URL);
	$controller = !empty($arr_url[0]) ? $arr_url[0] : "home";
	$action = isset($arr_url[1]) ? $arr_url[1] : "index";
	$param = isset($arr_url[2]) ? $arr_url[2] : null;

	// Trỏ tới file Controller và thực hiện điều hướng
	$fileName = 'Controller/'.ucfirst($controller).'Controller.php';

	if(file_exists($fileName)) {
        include($fileName);

        $className = ucfirst($controller).'Controller';

        $object = new $className;

        if(!method_exists($object, $action)) {
            header('HTTP/1.1 Not Found 404', true, 404);
            require('404.php');
            exit();
        } else {
            if(!empty($param)) {
                $object->$action($param);
            } else {
                $object->$action();
            }
        }
    } else {
        header('HTTP/1.1 Not Found 404', true, 404);
        require('404.php');
        exit();
    }
