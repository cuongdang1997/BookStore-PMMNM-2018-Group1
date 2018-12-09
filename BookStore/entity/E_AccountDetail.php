<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/17/2018
 * Time: 9:27 PM
 */
require_once ('E_Account.php');
class EAccountDetail extends EAccount
{
    var $name;
    var $address;
    var $phoneNumber;
    var $email;

    /**
     * E_AccountDetail constructor.
     * @param $name
     * @param $address
     * @param $phoneNumber
     * @param $email
     */
    public function __construct($id, $username, $name, $address, $phoneNumber, $email)
    {
        parent::__construct($id, $username);
        $this->name = $name;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }


}