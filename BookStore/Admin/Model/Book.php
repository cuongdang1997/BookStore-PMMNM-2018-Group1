<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 10/24/2018
 * Time: 9:32 PM
 */

class Book
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
        $sql = ("SELECT * FROM book WHERE Author=$author");
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

    function getCategory(){
        $lstCategory = [];
        $conn = DBConnect::getConnect();
        $query = ("SELECT CategoryName FROM category");
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($query);
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $lstCategory[$i] = $row["CategoryName"];
            $i++;
        }
        if(!$result)
            return die("Query FAILED" . mysqli_error());
        return $lstCategory;
    }

    function getIdCategory($categoryName){
        $id = 0;
        $conn = DBConnect::getConnect();
        $query = ("SELECT * FROM category");
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($query);
        $i = 0;
        while($row = $result->fetch_assoc()) {
            if($row["CategoryName"] === $categoryName) {
                $id = $row["id"];
            }
        }
        if(!$result)
            return die("Query FAILED" . mysqli_error());
        return $id;
    }

    function addBook($title, $price, $pagesize, $amount, $author, $year, $describe, $idCategory, $image){
        $conn = DBConnect::getConnect();
        $query = ("INSERT INTO book (Title, price, image, `Describe`, Author, pagesize, amount, `year`, idCategory) VALUES ('{$title}', '{$price}', '{$image}', '{$describe}', '{$author}', '{$pagesize}', '{$amount}', '{$year}', '{$idCategory}')");
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $query);
        if(!$result)
            return die("Query FAILED" . mysqli_error($conn));
        return 'Success';
    }

    function editBook($id, $title, $price, $pagesize, $amount, $author, $year, $describe, $idCategory){
        $conn = DBConnect::getConnect();
        $query = ("UPDATE book SET Title = '{$title}', price = '{$price}', `Describe` = '{$describe}', Author = '{$author}', pagesize = '{$pagesize}', amount = '{$amount}', `year` = '{$year}', idCategory = '{$idCategory}' WHERE id = '{$id})'");
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $query);
        if(!$result)
            return die("Query FAILED" . mysqli_error($conn));
        return 'Success';
    }

    function deleteBook($id){
        $conn = DBConnect::getConnect();
        $query = ("DELETE FROM book  WHERE id = '{$id})'");
        mysqli_set_charset($conn,"utf8");
        $result = mysqli_query($conn, $query);
        if(!$result)
            return die("Query FAILED" . mysqli_error($conn));
        return 'Success';
    }
}