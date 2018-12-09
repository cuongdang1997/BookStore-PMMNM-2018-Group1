<div class="container bg-white my-4">
    <div class="row">
        <h2 class="col-md-8">Books
        </h2>

        <div class="col-md-4">
            <div class="dropdown float-right dropdown-list">
                <div class="nice-select" tabindex="0"><span class="current">Default sorting</span>
                    <ul class="list">
                        <li data-value="1" class="option selected focus">Some option</li>
                        <li data-value="2" class="option">Another option</li>
                        <li data-value="3" class="option disabled">A disabled option</li>
                        <li data-value="4" class="option">Potato</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">

            <!--Bestsellers-->
            <div class="Bestsellers">
                <div class="widget sidebar-entry woocomerce widget_products woocomerce_products-2">
                    <h4 class="sidebar-entry-title">Bestsellers</h4>
                    <ul id="menu-menutips" class="nav-list">
                        <li >
                            <a href="#">
                                <img class="frame" src="assets/images/3.jpg">
                            </a>
                            <span class="woocomerce-Price-amount amount">
              <span class="product-title">Dangerous Frames </span>
              <br>
              <span class="woocomerce-Price-currencySymbol">€34.00</span>
            </span>
                        </li>
                        <li>
                            <a href="#">
                                <img class="frame" src="assets/images/01.jpg">
                            </a>
                            <span class="woocomerce-Price-amount amount">
              <span class="product-title">Fall in love ... </span>
              <br>
              <span class="woocomerce-Price-currencySymbol">€34.00</span>
            </span>
                        </li>
                        <li class="row">
                            <a href="#">
                                <img class="frame" src="assets/images/03.jpg">
                                <span class="product-title"></span>
                            </a>
                            <span class="woocomerce-Price-amount amount">
              <span class="product-title">Fantastic Beast </span>
              <br>
              <span class="woocomerce-Price-currencySymbol">€34.00</span>
            </span>
                        </li>
                        <li>
                            <a href="#">
                                <img class="frame" src="assets/images/05.jpg">
                            </a>
                            <span class="woocomerce-Price-amount amount">
              <span class="product-title">Twilight</span>
              <br>
              <span class="woocomerce-Price-currencySymbol">€28.00</span>
            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end-Bestsellers-->

            <!--Book-Genres-->
            <div class="Book-Genres">
                <h4 class="sidebar-entry-title">Book Genres</h4>
                <ul class="product-categories">
                    <?php
                    foreach ($lstCategory as $item) {
                        $html = "<li class='cat-item'>";
                        $html .=    "<a class='text-dark' href='Book?catId={$item->id}'>{$item->CategoryName}</a>";
                        $html .= "</li>";
                        echo $html;
                    }
                    ?>
                </ul>
            </div>
            <!--end-Book-Genres-->

            <!--search-->
            <div class="search">
                <h4 class="sidebar-entry-title">Search The Library</h4>
                <form class="form-search" action="">
                    <hr>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search products ...">

                    </div>
                    <div class="form-group">
                        <input class="btn btn-dark" type="submit" value="search">
                    </div>
                </form>
            </div>
            <!--end-search-->

        </div>
        <div class="col-md-9 products columns-4">
            <div class="row">
                <?php
                // ở đây mình sẽ lặp từng cuốn sách có trong db
                if(!empty($lstBooks)){
                    foreach ($lstBooks as $itemBook) {
                        ?><div class='owl-item active' >
                                    <div class='item'>
                                        <div class='card'>
                                            <img class='img-fluid img' alt='1' src='assets/images/<?php echo $itemBook->image ?>'>
                                            <div class='card-body'>
                                                <div class='row card-content'>
                                                    <div class='col-9 pr-0'>
                                                        <a class='card-link text-dark ' href='#'>
                                                            <h5 class='card-text-header'><?php echo  $itemBook->Title?></h5>
                                                        </a>
                                                    </div>

                                                    <div class='col-3 pr-0'>
                                                        <a data-id='<?php echo $itemBook->id?>' class='card-link text-dark plus' href='#'
                                                           data-toggle="tooltip" data-placement="right" title="Add To Cart!" onclick='addCartItem(this)'>+</a>
                                                    </div>
                                                </div>

                                                <div class='price'>
                                                    <p>€<?php echo number_format($itemBook->price, 2)?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  <?php  }
                } else {
                    echo "<h4 class='alert-danger'>No result is found!</h4>";
                }
                ?>
            </div>

        </div>
    </div>
