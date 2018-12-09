<?php
/**
 *
 */


class EBook
{
    var $id;
    var $Title;
    var $price;
    var $image;
    var $Describe;
    var $Author;
    var $pagesize;
    var $amount;
    var $year;
    var $idCategory;

    /**
     * [__construct description]
     * @param String $title [description]
     * @param Long $price [description]
     * @param String $author [description]
     * @param int $year [description]
     */
    function __construct($id, $title, $price, $image, $Describe, $Author, $pagesize, $amount,  $year, $idCategory)
    {
        $this->id = $id;
        $this->Title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->Describe = $Describe;
        $this->Author = $Author;
        $this->pagesize = $pagesize;
        $this->amount = $amount;
        $this->year = $year;
        $this->idCategory = $idCategory;
    }


    /*public function getBoookById($id)
    {
        $result = array();
        $lstBook = EBook::getList();
        foreach ($lstBook as $key => $value) {
            if ($value->id == $id) {

                $result[0] = new EBook($value->id, $value->title, $value->price, $value->author, $value->year, $value->img);
            }
        }
        return $result;
    }*/
}
?>