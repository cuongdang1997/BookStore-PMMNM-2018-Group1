<?php
include_once('../config/DBConnect.php');

class Category
{

    function getListCategory()
    {
        $lstCategory = [];
        $conn = DBConnect::getConnect();
        $sql = "SELECT * FROM category";
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $lstCategory[$i] = new ECategory($row["id"], $row["CategoryName"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $lstCategory;
    }

    function insCategory($catName) {
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        $sql = "INSERT INTO category(CategoryName) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$catName);
        $stmt->execute();
    }

    function getCategoryById($catId) {
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        $sql = "SELECT * FROM category WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$catId);
        $stmt->execute();
        $rsQuery = $stmt->get_result()->fetch_assoc();
        $rsReturn = new ECategory($rsQuery["id"], $rsQuery["CategoryName"]);
        return $rsReturn;
    }

    function updCategory($catId, $catName){
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        $sql = "UPDATE category SET CategoryName = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si",$catName,$catId);
        $stmt->execute();
    }

    function delCategory($catId) {
        $conn = DBConnect::getConnect();
        mysqli_set_charset($conn,"utf8");
        $sql = "DELETE FROM category WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$catId);
        $stmt->execute();
    }
}