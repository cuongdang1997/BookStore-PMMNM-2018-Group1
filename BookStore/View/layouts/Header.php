<!--menu-main-->
<nav class="navbar navbar-expand-md bg-color navbar-light p-0 main-menu">
    <div class="container pl-0">

        <a href="Home" class="navbar-brand mr-5 py-3">
            <img src="assets/images/logo.png" alt="logo" width="170" height="33.792048929664">
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav main-nav">
                <li class="nav-item px-2.<?php if($title=='Home') echo ' bg-active' ?>"><a class="nav-link" href="Home">Home</a></li>
                <li class="nav-item px-2<?php if($title=='Book') echo ' bg-active' ?>"><a class="nav-link" href="Book">Books</a></li>
                <li class="nav-item px-2<?php if($title=='Library') echo ' bg-active' ?>"><a class="nav-link" href="Library">Library</a></li>
                <li class="nav-item px-2<?php if($title=='Journal') echo ' bg-active' ?>"><a class="nav-link" href="Journal">Journal</a></li>
                <?php if(isset($_SESSION["user"])) { ?>
                    <li class="">
                        <div class="dropdown">
                            <button > <i class="fa fa-user"></i> <?php echo $userName ?></button>
                            <!--<a class="nav-link" href="Account/profile"></a>-->
                            <ul id="dropdown-list">
                                <li><a href="Account">Profile</a></li>
                                <li><a href="HistoryOrder">History Order</a></li>
                                <li><a href="Account/logout">Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                <?php } else {?>
                <li class="nav-item px-2"><a class="nav-link" href="Account"><i class="fa fa-user"></i> Log In</a></li>
                <?php }?>
            </ul>

            <ul class="navbar-nav ml-auto sub-nav">
                <?php if($title == "Book"){ ?>
                <li class="nav-item pt-3 px-1">
                <form action="" method="get" class="search-form" enctype="application/x-www-form-urlencoded">
                    <div class="search-input-env">
                        <input type="text" class="form-control search-input" name="searchText" placeholder="Search..." value="">
                    </div>
                        <span class="sr-only">Search</span>
                </form>
                </li>
                <?php } ?>
                <li class="nav-item pt-2 px-1">
                    <a class="nav-link cart-counter" href="Cart">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35px" height="35px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
					<path id="cart_5-svg" d="M361.5,215.333V432h-211V215.333H361.5 M391.5,185.333h-271V462h271V185.333L391.5,185.333zM204,160.333V132c0-28.673,23.327-52,52-52s52,23.327,52,52v28.333h30V132c0-45.287-36.713-82-82-82s-82,36.713-82,82v28.333H204z"></path>
					</svg>
                        <?php $amount = 0;
                        if(isset($_SESSION["cart"])){
                            $cart = $_SESSION["cart"];
                            $amount = sizeof($cart);
                        } if($amount != 0){?>
                            <span class="badge items-count" style="transform: matrix(1, 0, 0, 1, 0, 0);" id="amount"><?php echo $amount?></span>
                        <?php } else {?>
                            <span class="badge items-count" style="transform: matrix(1, 0, 0, 1, 0, 0);" id="amount"></span>
                        <?php } ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--end-main-menu-->