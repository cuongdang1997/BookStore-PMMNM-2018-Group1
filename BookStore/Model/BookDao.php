<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 10/24/2018
 * Time: 9:32 PM
 */

require_once "./entity/E_Book.php";

class BookDao
{
    function getBookById($idBook){
        $book = null;
        $conn = DBConnect::getConnect();
        $sql = sprintf("SELECT * FROM book WHERE id = '%s'", mysqli_real_escape_string($conn, $idBook));
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $book = new EBook($row["id"], $row["Title"], $row["price"], $row["image"], $row["Describe"],
                    $row["Author"], $row["pagesize"], $row["amount"], $row["year"], $row["idCategory"]);
            }
        }
        mysqli_close($conn);
        return $book;
    }

    function getListBook()
    {
        $lstBook = [];
        $conn = DBConnect::getConnect();
        $sql = "SELECT * FROM book";
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $lstBook[$i] = new EBook($row["id"], $row["Title"], $row["price"], $row["image"], $row["Describe"],
                    $row["Author"], $row["pagesize"], $row["amount"], $row["year"], $row["idCategory"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $lstBook;
    }

    function getListBookByAuthor($author){
        $lstBook = [];
        $conn = DBConnect::getConnect();
        $sql = sprintf("SELECT * FROM book WHERE Author = '%s'", mysqli_real_escape_string($conn, $author));
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $lstBook[$i] = new EBook($row["id"], $row["Title"], $row["price"], $row["image"], $row["Describe"],
                    $row["Author"], $row["pagesize"], $row["amount"], $row["year"], $row["idCategory"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $lstBook;
    }

    function getListBookByCategory($categoryId)
    {
        $lstBook = [];
        $conn = DBConnect::getConnect();
        $sql = "SELECT b.*, c.CategoryName FROM book b join category c on b.idCategory = c.id WHERE idCategory = ?";
        mysqli_set_charset($conn,"utf8");
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$categoryId); // tham số đầu là kdl cái này e tham khảo gg để rõ hi
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $lstBook[$i] = new EBook($row["id"], $row["Title"], $row["price"], $row["image"], $row["Describe"],
                    $row["Author"], $row["pagesize"], $row["amount"], $row["year"], $row["idCategory"], $row["CategoryName"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $lstBook;
    }

    function getListBookByTitle($searchText){
        $lstBook = [];
        $conn = DBConnect::getConnect();
        $sql = "SELECT * FROM book WHERE Title LIKE '%".$searchText."%'";
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $i = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $lstBook[$i] = new EBook($row["id"], $row["Title"], $row["price"], $row["image"], $row["Describe"],
                    $row["Author"], $row["pagesize"], $row["amount"], $row["year"], $row["idCategory"]);
                $i++;
            }
        }
        mysqli_close($conn);
        return $lstBook;
    }
}