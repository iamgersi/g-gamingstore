<?php
$product_shuffle=$topsale->getDataFromTopSale();

if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (isset($_POST['top_sale_submit'])){
        //call function addToCart
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}

$in_cart = $cart->getCartId($topsale->getData('cart'));
?>

<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Më të shiturat</h4>
        <hr>
        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item){
            ?>
            <div class="item itemProd py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>" class="produkti"><img src="<?php echo $item['item_image'] ??"./assets/products/pc/gaming_pc3.jpg"; ?>" class="saleImg img-fluid" alt="Gaming PC3"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price'] ?? '0'; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '25'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php if (in_array($item['item_id'], $in_cart ?? [])){
                                echo ' <button type="submit" disabled name="top_sale_submit" class="btnSubmit btn btn-success font-size-12">Në Shportë</button>';
                            }else{
                                echo ' <button type="submit" name="top_sale_submit" class="btnSubmit btn btn-warning font-size-12">Shto në Shportë</button>';
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
            <?php
            } //closing foreach
            ?>
        </div>

    </div>
</section>