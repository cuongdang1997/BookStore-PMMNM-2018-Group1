<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 12/5/2018
 * Time: 2:59 PM
 */

class Dashboard
{

    function  getTotalRevenue(){
        $totalRevenue = 0;
        $conn = DBConnect::getConnect();
        $sql = "SELECT SUM(book.price * invoicedetails.quantity) AS total, SUM(invoicedetails.quantity) AS sumQuantity 
                FROM invoicedetails INNER JOIN invoice ON invoicedetails.idOrder = invoice.id INNER JOIN customer ON invoice.idCustomer = customer.id 
                INNER JOIN book ON invoicedetails.idBook = book.id";
        $result = $conn->query($sql) or die(mysqli_error());
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $totalRevenue =$row["total"];
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $totalRevenue;
    }

    function getTotalCustomer(){
        $totalCustomer= 0;
        $conn = DBConnect::getConnect();
        $sql = "SELECT COUNT(customer.id) AS total FROM customer";
        $result = $conn->query($sql) or die(mysqli_error());
        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();
            $totalCustomer =$row["total"];
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        return $totalCustomer;
    }
}