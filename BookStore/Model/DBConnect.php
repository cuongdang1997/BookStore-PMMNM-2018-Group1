<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 10/24/2018
 * Time: 8:41 PM
 */

class DBConnect
{

    function getConnect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bookstore";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        return $conn;
    }
}