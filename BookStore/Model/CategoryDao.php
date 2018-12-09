<?php
require_once "./entity/E_Category.php";

class CategoryDao
{

    /**
     * get List Category
     * @return array
     */
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
}
