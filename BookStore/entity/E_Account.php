<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 10/27/2018
 * Time: 9:40 PM
 */

class EAccount
{

    var $id;
    var $username;


    function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
    }

}

?>