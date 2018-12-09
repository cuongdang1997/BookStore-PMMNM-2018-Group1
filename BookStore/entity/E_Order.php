<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/24/2018
 * Time: 2:22 PM
 */

class EOrder
{
    var $idOrder;
    var $paid;
    var $nameCustomer;
    var $phoneNumber;
    var $address;
    var $total;
    var $sumQuantity;
    var $orderDate;
    var $idCustomer;

    /**
     * E_Order constructor.
     * @param $idOrder
     * @param $paid
     * @param $nameCustomer
     * @param $phoneNumBer
     * @param $address
     * @param $total
     * @param $sumQuantity
     * @param $orderDate
     * @param $idCustomer
     */
    public function __construct($idOrder, $paid, $nameCustomer, $phoneNumBer, $address, $total, $sumQuantity, $orderDate, $idCustomer)
    {
        $this->idOrder = $idOrder;
        $this->paid = $paid;
        $this->nameCustomer = $nameCustomer;
        $this->phoneNumber = $phoneNumBer;
        $this->address = $address;
        $this->total = $total;
        $this->sumQuantity = $sumQuantity;
        $this->orderDate = $orderDate;
        $this->idCustomer = $idCustomer;
    }


}