<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <link rel="dns-prefetch" href="//example.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="stylesheet" href="assets/css/owl.carousel.css"/>
    <link rel="stylesheet" href="assets/css/owl.theme.default.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/stylebook.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <link rel="stylesheet" href="assets/css/style-jquery-nice.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/StyleCart.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/stylejournal.css"/>
    <title><?php echo $title?></title>
</head>
<body>

<!--menu-main-->
<?php
    if($title != 'Login' && $title != 'DetailOrder' ){
      include('Header.php');
    }
?>
<!--end-main-menu-->
<div style="padding-top: 80px">
    <?= @$content ?>
</div>


<!--footer-->
<?php
    if($title != 'Login' && $title != 'DetailOrder'){
        include('Footer.php');
    }
?>
<!--footer-->

    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
</body>
</html>