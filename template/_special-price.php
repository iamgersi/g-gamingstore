
<!--Special Price-->
<?php
$product_shuffle=$product->getDataFromProduct();
if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (isset($_POST['special_price_submit'])){
        //call function addToCart
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}
?>

<?php
    $in_cart = $cart->getCartId($topsale->getData('cart'));
?>

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Çmime speciale</h4>
        <hr>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">Të gjitha llojet</button>
            <button class="btn" data-filter=".mouse">Mouse</button>
            <button class="btn" data-filter=".keyboard">Tastierë</button>
            <button class="btn" data-filter=".headset">Kufje</button>
            <button class="btn" data-filter=".mic">Mikrofonë</button>
            <button class="btn" data-filter=".webcam">Kamera</button>
            <button class="btn" data-filter=".controller">Controllers</button>
            <button class="btn" data-filter=".chair">Karrige</button>
            <button class="btn" data-filter=".monitor">Monitor</button>
        </div>
        <hr>

        <div class="grid">
            <?php array_map(function ($item) use($in_cart){ ?>
            <div class="grid-item <?php echo $item['item_type'];?> cmimSpecial border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']) ?>" class="produkti"><img src="<?php echo $item['item_image'] ?? "./assets/products/mouse/razer_mamba_mouse.jpg"; ?>" class="saleImg img-fluid" alt="Razer Mouse"></a>
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
                                <span>$<?php echo $item['item_price'] ?? 0; ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php if(in_array( $item['item_id'] , $in_cart ?? [])){
                                    echo ' <button type="submit" disabled name="special_price_submit" class="btnSubmit btn btn-success font-size-12">Në Shportë</button>';
                                }else{
                                    echo ' <button type="submit" name="special_price_submit" class="btnSubmit btn btn-warning font-size-12">Shto në Shportë</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <?php
            },$product_shuffle)
            ?>
        </div>

    </div>
</section>
<!--!Special Price-->
