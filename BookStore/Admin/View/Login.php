<body class="background">
<div class="container">
<div class="login-content">
<div class="logo">
    <img src="../assets/images/logo.png" alt="">
</div>
<div class="my-5">
    <?php if(isset($error)){?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> <?php echo $error?>
        </div>
    <?php } ?>
    <form class="s" action="../Admin/Account/checkLogin" method="post">
        <h1 class="h3 mb-3 font-weight-normal text-center card-title" style="padding-top: 20px "> Administration</h1>
        <div class="form-group">
            <input type="text" id="inputEmail" class="form-control" placeholder="User name" required="" autofocus="" name="userName">
        </div>
        <div class="form-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        </div>
        <button class="btn btn-signIn btn-block text-white" type="submit">Sign in</button>
        <a href="#" id="forgot_pswd">Forgot password?</a>
        <hr>
    </form>
</div>
</div>
</div>
</body>