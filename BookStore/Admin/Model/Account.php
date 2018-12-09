<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 12/5/2018
 * Time: 9:17 AM
 */

class Account
{
    /**
     * check login for admin
     * @param $username
     * @param $pass
     * @return EAccount|null
     */
    function checkLogin($username, $pass){
        $acc = null;
        $conn = DBConnect::getConnect();
        $sql = "SELECT id, userName FROM admin WHERE userName ='".$username."' AND pass ='".$pass."'";
        $result = $conn->query($sql) or die(mysqli_error());
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $acc = new EAccount($row["id"], $row["userName"]);
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $acc;
    }

    /**
     * get profile for admin
     * @param $username
     * @return EAccountDetail|null
     */
    function getProfileAccount($username){
        $acc = null;
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        /*$sql = "SELECT * FROM customer WHERE Username ='".$username."'";*/
        $sql = sprintf("SELECT * FROM customer WHERE Username='%s'", mysqli_real_escape_string($conn, $username));
        $result = $conn->query($sql) or die(mysqli_error());
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $acc = new EAccountDetail($row["id"], $row["Username"], $row["Name"], $row["Address"], $row["PhoneNumber"], $row["Email"] );
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $acc;
    }
}