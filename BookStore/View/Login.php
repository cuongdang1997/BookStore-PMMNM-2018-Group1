<body class="background">
<div class="logo">
    <img src="assets/images/logo.png" alt="">
</div>
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
<div id="logreg-forms" class="card card-signin my-5">
    <?php if(isset($error)){?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> <?php echo $error?>
        </div>
    <?php } ?>
    <form class="form-signin" action="Account/checkLogin" method="post">
        <h1 class="h3 mb-3 font-weight-normal text-center card-title" style="padding-top: 20px "> Sign in</h1>
        <div class="form-group">
            <input type="text" id="inputEmail" class="form-control" placeholder="User name" required="" autofocus="" name="userName">
        </div>
        <div class="form-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        </div>
        <button class="btn btn-signIn col-md-12" type="submit">Sign in</button>
        <a href="#" id="forgot_pswd">Forgot password?</a>
        <hr>
        <!-- <p>Don't have an account!</p>  -->
        <button class="btn btn-signIn col-md-12" type="button" id="btn-signup"><i class="fa fa-user-plus"></i> Sign up New Account</button>
        <p class="text-center"> OR  </p>
        <div class="social-login">
            <button class="btn facebook-btn social-btn" type="button">
                <span><i class="fa fa-facebook-f"></i> Sign in with Facebook</span> </button>
            <button class="btn google-btn social-btn" type="button">
                <span><i class="fa fa-google-plus-g"></i> Sign in with Google+</span> </button>
        </div>
    </form>
    <form action="/reset/password/" class="form-reset">
        <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <button class="btn btn-signIn col-md-12" type="submit">Reset Password</button>
        <a href="#" id="cancel_reset"><i class="fa fa-angle-left"></i> Back</a>
    </form>
    <form action="/signup/" class="form-signup">
        <h1 class="h3 mb-3 font-weight-normal text-center" style="padding-top: 20px"> Sign up</h1>

        <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
        <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
        <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
        <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

        <button class="btn btn-signIn btn-block" type="submit"><i class="fa fa-user-plus"></i> Sign Up</button>
        <a href="#" id="cancel_signup"><i class="fa fa-angle-left"></i> Back</a>
    </form>
    <br>
</div>
</p>
</div>
</body>