<div class="content-cart container pl-0">
    <form action="#">
        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
            <thead>
            <tr>
                <th class="product-name" colspan="2">Product</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-subtotal">Total</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $total = 0;
            if(isset($lstItemOfOrder)){
            foreach ($lstItemOfOrder as $item){
                $totalItemCart = 0;
                $total += $item->price*$item->quantity;
                $totalItemCart += $item->price*$item->quantity;
                ?>
                <tr class="woocommerce-cart-form__cart-item cart_item" id="<?php echo $item->id ?>ItemCart">
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
                            <input type="text" id="<?php echo $item->id?>" class="input-text qty text" step="1" min="1" max="" name="" disabled
                                   value="<?php echo $item->quantity ?>" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
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
            <?php } }?>
            </tbody>
        </table>
    </form>
    <div class="cart-collaterals">
        <div class="cart_totals">
            <h2>Order totals</h2>
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
    </div>
</div>
<div style="clear: both;">

</div>
