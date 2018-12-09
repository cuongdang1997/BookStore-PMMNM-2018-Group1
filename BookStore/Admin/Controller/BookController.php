<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 18/11/2018
 * Time: 8:36 CH
 */
require_once ("./Model/Book.php");
include_once ("BaseController.php");
class BookController extends BaseController
{
    /**
     * return view booklist
     */
    function index(){
        if(isset($_SESSION["admin"])){
            $lstBook = Book::getListBook();
            $lstCategory = Book::getCategory();
            $data = array("lstBook" => $lstBook, "lstCategory" => $lstCategory);
            $this->render("book", "Book", $data);
        }else{
            header("Location: ../Admin/Account");
        }
    }

    /**
     * add book
     */
    function addBook(){
        if(isset($_SESSION["admin"])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $title = $_POST["title"];
                $price = $_POST['price'];
                $pagesize = $_POST['pagesize'];
                $amount = $_POST['amount'];
                $author = $_POST['author'];
                $year = $_POST['year'];
                $describe = $_POST['describe'];
                $categoryName = $_POST["categoryName"];
                $idCategory = Book::getIdCategory($categoryName);
                $fileName = '';
                if($_FILES['image'] != ''){
                    $errors = []; // Store all foreseen and unforseen errors here
                    $fileExtensions = ['jpeg', 'jpg', 'png']; // Get all the file extensions
                    $fileName = $_FILES['image']['name']; //Tên thực sự của file đã upload.
                    $fileSize = $_FILES['image']['size']; //Kích thước tính theo byte của file đã upload.
                    $fileTmpName = $_FILES['image']['tmp_name']; //File đã upload trong thư mục tạm thời trên Web Server.
                    $fileType = $_FILES['image']['type']; //Kiểu MIME của file đã upload.
                    $tmp = explode('.', $fileName);
                    $fileExtension = end($tmp);
                    $dirpath = realpath('C:/xampp/htdocs/BookStore/assets/images');
                    $uploadPath = $dirpath . "/" . $fileName;
                }

                if (!in_array($fileExtension, $fileExtensions)) {
                    $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
                }

                if ($fileSize > 2000000) {
                    $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
                }

                if (empty($errors)) {
                    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

                    if ($didUpload) {
                        echo "The file " . basename($fileName) . " has been uploaded";
                    } else {
                        echo "An error occurred somewhere. Try again or contact the admin";
                    }
                } else {
                    foreach ($errors as $error) {
                        echo $error . "These are the errors" . "\n";
                    }
                }
                Book::addBook($title, $price, $pagesize, $amount, $author, $year, $describe, $idCategory, $fileName);
                header("Location: ../Book");
            }
        }else{
            header("Location: ../Admin/Account");
        }
    }

    /**
     * edit book
     */
    function editBook(){
        if(isset($_SESSION["admin"])){
            $id = $_GET["id"];
            $lstCategory = Book::getCategory();
            $book = Book::getBookById($id);
            $data = array("book" => $book, "lstCategory" => $lstCategory);
            $this->render("EditBook", "Edit Book", $data);
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $title = $_POST["title"];
                $price = $_POST['price'];
                $pagesize = $_POST['pagesize'];
                $amount = $_POST['amount'];
                $author = $_POST['author'];
                $year = $_POST['year'];
                $describe = $_POST['describe'];
                $categoryName = $_POST["categoryName"];
                $idCategory = Book::getIdCategory($categoryName);
                Book::editBook($id, $title, $price, $pagesize, $amount, $author, $year, $describe, $idCategory);
                header("Location: ../Book");
            }
        }else{
            header("Location: ../Admin/Account");
        }
    }

    /**
     * delete book
     */
    function deleteBook(){
        if(isset($_SESSION["admin"])){
            $id = $_GET["id"];
            Book::deleteBook($id);
            header("location: ../Book");
        }else{
            header("Location: ../Admin/Account");
        }
    }
}