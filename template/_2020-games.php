<?php
    $product_shuffle=$newgames->getDataFromNewGames();
if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (isset($_POST['new_games_submit'])){
        //call function addToCart
        $cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }
}
?>
<?php
$in_cart = Cart::getCartId($topsale->getData('cart'));
?>
<!--2020 Games-->
<section id="2020-games">
    <div class="container" style="margin-top: 40px;">
        <h4 class="font-rubik font-size-20">2020 Videogames</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
            <div class="item itemProd py-2 bg-light">
                <div class="product font-rale">
                    <a href="<?php if ($item['item_name']=="Fortnite"){echo "https://www.epicgames.com/fortnite/en-US/home";}elseif ($item['item_name']=="Call Of Duty: Warzone"){echo "https://www.callofduty.com/warzone/download";}elseif ($item['item_name']=="Valorant"){echo "https://playvalorant.com/en-gb/";}elseif ($item['item_name']=="HyperScape"){echo "https://www.ubisoft.com/en-gb/game/hyper-scape";} else { printf('%s?item_id=%s','product.php',$item['item_id']);}?>" class="produkti"><img src="<?php echo $item['item_image']; ?>" class="saleImg img-fluid" alt="Fall Guys"></a>
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
                            <span><?php if ($item['item_price']!=0){
                                echo "$".$item['item_price'];
                                }else echo $item['item_description'];?></span>
                        </div>
                        <?php
                        if($item['item_price']==0) echo ' <button type="submit" name="new_games_submit" class="btnSubmit btn btn-warning font-size-12">Shkarko Tani</button>';
                        else{?>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php if(in_array( $item['item_id'] , $in_cart ?? [])){
                             echo '<button type="submit" disabled name="new_games_submit" class="btnSubmit btn btn-success font-size-12">Në Shportë</button>';
                            }else{
                                echo ' <button type="submit" name="new_games_submit" class="btnSubmit btn btn-warning font-size-12">Shto në Shportë</button>';
                            }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

    </div>
</section>
<!--!2020 Games-->
