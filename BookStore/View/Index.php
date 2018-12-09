<!--banner-->
<header id="banner-section">
    <div class="container">
        <div class="row">
            <div class="banner elementToFadeInAndOut">
                <div class="banner-content p-4 ">
                    <h1 class="display-4">"The world is quiet here"</h1>
                    <div class="banner-content" id="sub-text">
                        <p>- Lemony Snicket</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--end-banner-->

<!--Bestsellers-->
<section class="bg-white my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2 class="display-4 text-heading">Bestsellers</h2>
                    <p class="text-muted">Top selling books of 2014</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="owl-carousel owl-theme">

                    <?php foreach ($lstBook as $item){ ?>
                    <div class="card">
                        <img class="img-fluid" alt="1" src="assets/images/<?php echo $item->image ?>"/>
                        <div class="card-body">
                            <div class="row card-content">
                                <div class="col-9 pr-0">
                                    <a class="card-link text-dark " href="#">
                                        <h5 class="card-text-header"><?php echo $item->Title ?></h5>
                                    </a>
                                </div>

                                <div class="col-3 pr-0">
                                    <a href="#" class="card-link text-dark plus" data-id="<?php echo $item->id ?>" onclick="addCartItem(this)"
                                       data-toggle="tooltip" data-placement="right" title="Add To Cart!">+</a>
                                </div>

                                <div class="text-uppercase col">
                                    <a class="text-muted card-link" href="#">History,</a>
                                    <a class="text-muted card-link ml-0" href="#">Nobel Books</a>
                                </div>
                            </div>

                            <div class="price">
                                <p>€<?php echo number_format($item->price, 2)?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!--end-Bestsellers-->

<!--Author-of-the-Month-->
<section class="bg-white my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2 class="display-4 text-heading">Author of the Month</h2>
                    <p class="text-muted">And his/her Bestsellers</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <img class="img-fluid" src="assets/images/woman.jpg" alt="woman">
            </div>

            <div class="col-md pl-5 author">

                <h5 class="display-4 author-text-header mb-1">Maria Garcia</h5>
                <p class="text-muted mb-0">Novel Prize Winner 2008</p>
                <span class="dash mb-5">&#x2015;</span>
                <p class="mt-4 text-muted">
                    Inhabit hearing perhaps on ye do no. It maids decay as there he. Smallest on suitable disposed do although blessing he juvenile in. Society or if excited forbade. Here name off yet she long sold easy whom. Differed oh cheerful procured pleasure securing suitable in. Hold rich on an he oh fine. Chapter ability shyness article welcome be do on service.
                </p>
                <div class="d-flex">
                    <div class="card">
                        <img class="img-fluid" alt="1" src="assets/images/book3.jpg"/>
                        <div class="card-body">
                            <div class="row card-content">
                                <div class="col-9 pr-0">
                                    <a class="card-link text-dark " href="#">
                                        <h5 class="card-text-header">The Third Plate</h5>
                                    </a>
                                </div>

                                <div class="col-3 pr-0">
                                    <span><a class="card-link text-dark plus" href="#">+</a></span>
                                </div>
                                <div class="text-uppercase col">
                                    <a class="text-muted card-link" href="#">History,</a>
                                    <a class="text-muted card-link ml-0" href="#">Nobel Books</a>
                                </div>
                            </div>

                            <div class="price">
                                <p>€34.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img class="img-fluid" alt="1" src="assets/images/book2.jpg" />
                        <div class="card-body">
                            <div class="row card-content">
                                <div class="col-9 pr-0">
                                    <a class="card-link text-dark " href="#">
                                        <h5 class="card-text-header">Silence Once Begun</h5>
                                    </a>
                                </div>

                                <div class="col-3 pr-0">
                                    <a class="card-link text-dark plus" href="#">+</a>
                                </div>

                                <div class="text-uppercase col">
                                    <a class="text-muted card-link" href="#">Fantasy,</a>
                                    <a class="text-muted card-link ml-0" href="#">Literature</a>
                                </div>
                            </div>

                            <div class="price">
                                <p>€29.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid" alt="1" src="assets/images/book3.jpg" />
                        <div class="card-body">
                            <div class="row card-content">
                                <div class="col-9 pr-0">
                                    <a class="card-link text-dark " href="#">
                                        <h5 class="card-text-header">Colorless Tsukuru</h5>
                                    </a>
                                </div>

                                <div class="col-3 pr-0">
                                    <a class="card-link text-dark plus" href="#">+</a>
                                </div>

                                <div class="text-uppercase col">
                                    <a class="text-muted card-link" href="#">Fantasy,</a>
                                    <a class="text-muted card-link ml-0" href="#">Literature</a>
                                </div>
                            </div>

                            <div class="price">
                                <p>€34.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid" alt="1" src="assets/images/book4.jpg" />
                        <div class="card-body">
                            <div class="row card-content">
                                <div class="col-9 pr-0">
                                    <a class="card-link text-dark " href="#">
                                        <h5 class="card-text-header">Never Love a Gambler</h5>
                                    </a>
                                </div>

                                <div class="col-3 pr-0">
                                    <a class="card-link text-dark plus" href="#">+</a>
                                </div>

                                <div class="text-uppercase col">
                                    <a class="text-muted card-link" href="#">Romance</a>
                                </div>
                            </div>

                            <div class="price">
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-Author-of-the-Month-->

<section>
    <div class="container my-4">
        <div class="row free-shipping">
            <div class="col-md-10">
                <div class="heading">
                    <h1 class="text-uppercase text-heading text-muted">FREE SHIPPING</h1>
                    <p class="text-uppercase text-muted">
                        FREE SHIPPING OVER $59 FOR INTERNATIONAL ORDERS
                    </p>
                </div>
            </div>
            <div class="col-md  button-getbook">
                <a class="btn btn-dark" href="#">Get a book!</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="pl-0 library">
                <a href="#">
                    <img class="img-fluid" src="assets/images/library.jpg" alt="library"/>
                    <div class="overlay">
                        <div class="banner text-white">
							<span>
								<strong class="text-uppercase display-4 text-white">Library</strong>
							</span>
                            <span class="text-uppercase text-white text-muted border-top">reading space</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="pl-0 text-center furnishing">
                <a href="#">
                    <img class="img-fluid" src="assets/images/furnishing.jpg" alt="library"/>
                    <div class="overlay">
                        <div class="banner">
                            <strong class="text-uppercase display-4 text-white border-bottom">
                                Furnishing
                            </strong>
                            <p class="text-uppercase text-white">home furnishment</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="pl-0 text-center ebooks">
                <a href="#">
                    <img class="img-fluid" src="assets/images/ebooks.jpg" alt="library"/>
                    <div class="overlay">
                        <div class="banner">
                            <strong class="text-uppercase display-4 text-white">
                                Ebooks
                            </strong>
                            <p class="text-uppercase text-white border-top">your reading tool</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mb-5 px-0 people">
        <div class="row text">
            <div class="col-md-12">
                <p class="display-4 text-header">What people say?</p>
            </div>
        </div>
        <div class="mb-5 people">
            <div class="row slider1">
                <div class="col-md-1 pr-0">
                    <img class="rounded-circle w-100" src="assets/images/slider1.jpg" alt="slider1" />
                </div>

                <div class="col-md text text-muted">
                    <p class="text-main">This is an impressive theme. It is very well designed and it works incredibly well.</p>
                    <p class="text-small">LOCTEKMARC</p>
                </div>
            </div>

            <div class="row slider2">
                <div class="col-md-1 pr-0">
                    <img class="rounded-circle w-100" src="assets/images/slider2.jpg" alt="slider1" />
                </div>

                <div class="col-md text text-muted">
                    <p class="text-main">Design quality is minimalist, sleek, and clean. On top of all that, customer support is beyond amazing. I’ve seriously never had such amazing customer support before.</p>
                    <p class="text-small">JESSEQLI</p>
                </div>
            </div>

            <div class="row slider3">
                <div class="col-md-1 pr-0">
                    <img class="rounded-circle w-100" src="assets/images/slider3.jpg" alt="slider1" />
                </div>

                <div class="col-md text text-muted">
                    <p class="text-main">Very nice theme, it adapts to whatever you need and has a great design. Do not hesitate to buy it. Quality and efficient technical support.</p>
                    <p class="text-small">ALEXGL</p>
                </div>
            </div>

            <div class="row slider4">
                <div class="col-md-1 pr-0">
                    <img class="rounded-circle w-100" src="assets/images/slider4.jpg" alt="slider1" />
                </div>

                <div class="col-md text text-muted">
                    <p class="text-main">This is the best theme I found for my fashion shop. I was looking for a theme with beautiful minimal design, easy to install and setup, responsive and full featured. Aurum is exactly what I needed, and even more: The team offer a lovely support and for a beginner like me it is a crucial point! Thank you Laborator for your work, and continuous success!</p>
                    <p class="text-small">4UR3LIEN</p>
                </div>
            </div>

            <div class="row slider5">
                <div class="col-md-1 pr-0">
                    <img class="rounded-circle w-100" src="assets/images/slider5.jpg" alt="slider1" />
                </div>

                <div class="col-md text text-muted">
                    <p class="text-main">Good support of theme. When a problem arose for my specific installation, they were able to track it down and fix it.</p>
                    <p class="text-small">CHUCKY76</p>
                </div>
            </div>
        </div>
    </div>
</section>
