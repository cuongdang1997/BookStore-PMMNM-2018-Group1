<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/22/2018
 * Time: 9:24 PM
 */

require_once('../config/DBConnect.php');
class Order
{

    function getListOrder(){
        $lstOrder = [];
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        $sql = "SELECT invoice.id AS idOrder, invoice.OrderDate, invoice.paid, customer.id AS idCustomer, customer.Name, customer.PhoneNumber, 
                customer.Address, SUM(book.price * invoicedetails.quantity) AS total, SUM(invoicedetails.quantity) AS sumQuantity 
                FROM invoicedetails INNER JOIN invoice ON invoicedetails.idOrder = invoice.id INNER JOIN customer ON invoice.idCustomer = customer.id 
                INNER JOIN book ON invoicedetails.idBook = book.id GROUP BY invoice.id, invoice.OrderDate, invoice.paid, customer.id, 
                customer.PhoneNumber, customer.Address, customer.Name";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $lstOrder[$i] = new EOrder($row["idOrder"], $row["paid"], $row["Name"],
                                            $row["PhoneNumber"], $row["Address"], $row["total"], $row["sumQuantity"], $row["OrderDate"], $row["idCustomer"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $lstOrder;
    }

    function updateOrder($idOrder, $status){
            $conn = DBConnect::getConnect();
            $sql = "UPDATE invoice SET paid = '".$status."' WHERE id = '".$idOrder."'" ;
            $conn->query($sql);
            mysqli_close($conn);
            return true;
    }
}