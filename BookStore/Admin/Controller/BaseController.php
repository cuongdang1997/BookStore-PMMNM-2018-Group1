<?php
/**
 * Created by PhpStorm.
 * User: cuong
 * Date: 11/8/2018
 * Time: 11:18 AM
 */

class BaseController
{
    protected $folder;

    /**
     * render data to view
     * @param $file
     * @param $title
     * @param array $data
     */
    function render($file, $title, $data = array())
    {
        $view_file = 'View/' . $file . '.php';
        if (is_file($view_file)) {

            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            require_once('View/layouts/application.php');
        } /*else {
            // Nếu file muốn gọi ra không tồn tại thì chuyển hướng đến trang báo lỗi.
            header('Location: index.php?controller=pages&action=error');
        }*/
    }
}