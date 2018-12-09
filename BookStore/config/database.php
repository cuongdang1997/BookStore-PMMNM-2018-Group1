<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/9/2018
 * Time: 8:48 AM
 */

class Database
{
    private static $dbc;

   public static function connect()
    {
        self::$dbc = mysqli_connect( 'localhost', 'root' , '' , 'bookstore' );

        if(!self::$dbc) {
            echo 'Không thể kết nối Database';
        } else {
            mysqli_set_charset(self::$dbc, 'utf8');
            date_default_timezone_set('Asia/Ho_Chi_Minh');
        }

    }

}