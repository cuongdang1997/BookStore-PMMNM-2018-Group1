<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
 <!--   <link rel="dns-prefetch" href="//example.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">-->
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/bootstrap.min.css'?>>
    <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet">
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/normalize.css'?>>
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/font-awesome.min.css'?>>
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/themify-icons.css'?>>
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/flag-icon.min.css'?>>
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/cs-skin-elastic.css'?>>
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/styleAdmin1.css'?>>
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/lib/vector-map/jqvmap.min.css'?>>
    <link rel="stylesheet" href=<?php echo UrlConfig::$baseUrl.'/assets/css/styleLogin.css'?>>
    <title><?php echo $title?></title>
</head>
<body>
<?php
    if($title != 'Login'){
        include('LeftMenu.php');
    }
?>
<!--end-main-menu-->

<?= @$content ?>

<!--footer-->
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/vendor/jquery-2.1.4.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/popper.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/plugins.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/main.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/sweetalert2.all.min.js'?>></script>

    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/datatables.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/dataTables.bootstrap.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/dataTables.buttons.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/buttons.bootstrap.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/jszip.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/pdfmake.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/vfs_fonts.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/buttons.html5.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/buttons.print.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/buttons.colVis.min.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/lib/data-table/datatables-init.js'?>></script>
    <script src=<?php echo UrlConfig::$baseUrl.'/assets/js/adminJs.js'?>></script>
</body>
</html>