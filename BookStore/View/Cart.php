
<div class="content-cart container pl-0">
    <form action="#">
        <div class="page-heading columns-2">
            <div class="col">
                <h1>
                    <?php $amount = 0;
                    if(isset($cart)){
                        $amount = sizeof($cart);
                    } if($amount != 0){?>
                    Cart
                    <br>

                        <small>you've got <?php echo $amount?> items in the cart</small>
                </h1>
            </div>
            <div class="content-right">
                <div class="coupon-form coupon-visible">
                    <a href="#" class="icon-button icon-coupon">
                        <i></i>
                        <span class="title">
			            Enter Coupon
                            <br><small>To get discounts</small>
		                </span>
                    </a>

                </div>
            </div>
        </div>
        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
            <thead>
            <tr>
                <th class="product-remove">&nbsp;</th>
                <th class="product-name" colspan="2">Product</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-subtotal">Total</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $total = 0;
                   foreach ($cart as $item){
                       $totalItemCart = 0;
                       $total += $item->price*$item->quantity;
                       $totalItemCart += $item->price*$item->quantity;
            ?>
            <tr class="woocommerce-cart-form__cart-item cart_item" id="<?php echo $item->id ?>ItemCart">
                <td class="product-remove">
                    <a href="#" value="<?php echo $item->id ?>" class="remove rounded btn-delete" aria-label="Remove this item" data-product_id="27" data-product_sku="" onclick="removeCartItem(this)">×</a>
                </td>
                <td class="product-thumbnail">
                    <a href="#"><span class="image-placeholder image-loaded" style="padding-bottom:128.57142857%">
                            <img width="70" height="90" src="assets/images/<?php echo $item->img ?>" class="attachment-shop-thumb-2 size-shop-thumb-2 wp-post-image lazyloaded" alt=""></span></a>
                </td>
                <td class="product-name" data-title="Product">
                    <span class="name"><a href="#"><?php echo $item->title ?></a></span><br><span class="price">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>
                            <?php echo number_format($item->price, 2)?>
                        </span>
                    </span>
                </td>
                <td class="product-quantity" data-title="Quantity">
                    <div class="quantity buttons_added">
                        <input type="button" value="-" class="plusminus plus minus" data-id="<?php echo $item->id?>" onclick="updateCartItem(this)"
                            data-price="<?php echo $item->price ?>">
                        <input type="text" id="<?php echo $item->id?>" class="input-text qty text" step="1" min="1" max="" name="" disabled
                               value="<?php echo $item->quantity ?>" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                        <input type="button" value="+" class="plusminus plus" data-id="<?php echo $item->id?>" onclick="updateCartItem(this)"
                           data-price="<?php echo $item->price ?>">
                    </div>
                </td>
                <td class="product-subtotal" data-title="Total">
                    <div class="price total"><span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">€</span>
                            <span id="totalItemCart<?php echo $item->id?>">
                                <?php echo number_format($totalItemCart, 2)?>
                            </span>
                        </span>
                    </div>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </form>
    <div class="cart-collaterals">
        <div class="cart_totals">
            <h2>Cart totals</h2>
            <table cellspacing="0" class="shop_table shop_table_responsive">
                <tbody>
                <tr class="order-total">
                    <th>Total</th>
                    <td data-title="Total"><span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">€</span><span id="total"> <?php echo number_format($total, 2)?></span></span>
                    </td>
                </tr>
                </tbody>
            </table>
            <!--<div class="wc-proceed-to-checkout">
            </div>-->
        </div>
        <div class="cart-buttons">
            <div class="col">
                <button type="button" class= "button-large button-block btn-update-cart button-secondary" id="update-cart-secondary">Update Cart</button>
            </div>
            <div class="col">
                <a class="btn-checkout button-large button-block" href="CheckOut" id="proceed-to-checkout">Checkout</a>
            </div>
        </div>
    </div>
<?php } else{  ?>
   <div class="shop-empty-cart-page cart-empty" >
        <div class="container">
            <div class="col-sm-12 text-center alert alert-danger alert-dismissible">
                <div class="cart-bag-env">
                    <div class="cart-smiley shown">
                        <i></i>
                        <i class="cart-smiley-hands"></i>
                    </div>
                    <div class="cart-bag"></div>
                </div>
                <div class="cart-empty-title">
                    <h1>Cart Empty</h1>
                    <p class="return-to-shop">
                        <a class="btn btn-signIn text-dark" href="Home">
                            Browse our products &amp; fill the cart!
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
<?php } ?>
</div>
<div style="clear: both;">

</div>
