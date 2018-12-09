<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 12/8/2018
 * Time: 8:34 AM
 */

require_once "./entity/E_Order.php";
class OrderDao
{

    function getListOrderByIdCustomer($idCustomer){
        $lstOrder = [];
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        $sql = "SELECT invoice.id AS idOrder, invoice.OrderDate, invoice.paid, customer.id AS idCustomer, customer.Name, customer.PhoneNumber, 
                customer.Address, SUM(book.price * invoicedetails.quantity) AS total, SUM(invoicedetails.quantity) AS sumQuantity 
                FROM invoicedetails INNER JOIN invoice ON invoicedetails.idOrder = invoice.id INNER JOIN customer ON invoice.idCustomer = customer.id 
                INNER JOIN book ON invoicedetails.idBook = book.id WHERE idCustomer = '".$idCustomer."' GROUP BY invoice.id, invoice.OrderDate, invoice.paid, customer.id, 
                customer.PhoneNumber, customer.Address, customer.Name";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $lstOrder[$i] = new EOrder($row["idOrder"], $row["paid"], $row["Name"],
                    $row["PhoneNumber"], $row["Address"], $row["total"], $row["sumQuantity"], $row["OrderDate"], $row["idCustomer"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $lstOrder;
    }

    function getDetailOrder($idOrder) {
        $lstItemOfOrder = [];
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        $sql = "SELECT book.id, book.Title, book.price, book.image, invoicedetails.quantity FROM invoicedetails INNER JOIN invoice 
                ON invoicedetails.idOrder = invoice.id INNER JOIN customer ON invoice.idCustomer = customer.id INNER JOIN book 
                ON invoicedetails.idBook = book.id WHERE invoice.id = '".$idOrder."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $lstItemOfOrder[$i] = new EItemCart($row["id"], $row["Title"], $row["price"], $row["image"], $row["quantity"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return  $lstItemOfOrder;
    }
}