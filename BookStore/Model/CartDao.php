<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 10/27/2018
 * Time: 9:44 PM
 */

class CartDao
{

    function addOrderToDB($cart , $idCustomer){
        $idOrder = 1;
        $conn = DBConnect::getConnect();
        $sql = "INSERT INTO invoice (paid, idCustomer) VALUES (0, '$idCustomer')";
        $conn->query($sql);

        $sql = "SELECT MAX(id) AS idMax FROM invoice";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $idOrder = $row["idMax"];
        }
        mysqli_free_result($result);

        foreach ($cart as $item){
            $sql = "INSERT INTO invoicedetails (idBook, quantity, idOrder) VALUES ('$item->id', '$item->quantity','$idOrder')";
            $conn->query($sql);
        }
        mysqli_close($conn);
    }

    function getCart($idCustomer){
        require_once "./entity/IteamCart.php";
        $cart = null;
        $conn = DBConnect::getConnect();
        $sql = "SELECT book.id, Title, price, images, Author, quantity FROM invoice INNER JOIN invoicedetails ON invoice.id = invoicedetails.idOrder 
                INNER JOIN book ON invoicedetails.idBook = book.id WHERE invoice.idCustomer = '".$idCustomer."'";
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $cart[$i] = new IteamCart($row["id"], $row["Title"], $row["price"], $row["images"], $row["Author"], $row["quantity"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $cart;
    }


    function sumPrice($idCustomer){
        $sumPrice = 0;
        $conn = DBConnect::getConnect();
        $sql = "SELECT SUM(price * quantity) as sumPrice FROM invoice INNER JOIN invoicedetails ON invoice.id = invoicedetails.idOrder 
            INNER JOIN book ON invoicedetails.idBook = book.id WHERE invoice.idCustomer = '".$idCustomer."'";
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $sumPrice = $row['sumPrice'];
        }
        mysqli_close($conn);
        return $sumPrice;
    }

    function countIteamCart($idCustomer){
        $countIteamCart = 0;
        $conn = DBConnect::getConnect();
        $sql = "SELECT COUNT(invoicedetails.id) as countIteamCart FROM invoice INNER JOIN invoicedetails ON invoice.id = invoicedetails.idOrder 
            INNER JOIN book ON invoicedetails.idBook = book.id WHERE invoice.idCustomer = '".$idCustomer."'";
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $countIteamCart = $row['countIteamCart'];
        }
        mysqli_close($conn);
        return $countIteamCart;
    }
}