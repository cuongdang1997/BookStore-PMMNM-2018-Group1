<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 10/27/2018
 * Time: 9:51 PM
 */

require_once "./entity/E_Account.php";
require_once "./entity/E_AccountDetail.php";

class AccountDao
{

    /**
     * check login for user
     * @param $username
     * @param $pass
     * @return EAccount|null
     */
    function checkLogin($username, $pass){
        $acc = null;
        $conn = DBConnect::getConnect();
        $sql = "SELECT id, Username FROM customer WHERE Username ='".$username."' AND Pass ='".$pass."'";
        $result = $conn->query($sql) or die(mysqli_error());
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $acc = new EAccount($row["id"], $row["Username"]);
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $acc;
    }

    /**
     * get profile for user
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

    function updateProfile($profile){
        $conn = DBConnect::getConnect();
        $query = ("UPDATE customer SET customer.Name = '{$profile->name}', Address = '{$profile->address}', PhoneNumber = '{$profile->phoneNumber}', Email = '{$profile->email}', Username = '{$profile->username}' WHERE id = '{$profile->id})'");
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $query);
        if(!$result)
            return die("Query FAILED" . mysqli_error($conn));
        return 'Success';
    }

}