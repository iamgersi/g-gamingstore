<!--shopping cart-->
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
//    if (isset($_POST['delete-cart-submit'])){
//        $deletedRecord = $cart->deleteCart($_POST['item_id']);
//    }

    if (isset($_POST['delete-wishlist-submit'])){
        $deletedRecord = $cart->deleteWish($_POST['item_id']);
    }

    if (isset($_POST['cart-submit'])){
        $cart->saveForLater($_POST['item_id'],'cart','wishlist');
    }

}
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Lista e Të Preferuarave</h5>

        <!--Shopping cart items-->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getDataFromProduct('wishlist') as $item):
                    $cart=$product->getProduct($item['item_id']);

                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!--card item-->

                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'];?>" alt="cart1" class="img-fluid" style="height:120px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'];?></h5>
                                <small>by <?php echo $item['item_brand'];?></small>
                                <!--rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">3582 vota</a>
                                </div>
                                <!--!rating-->

                                <!--product qty-->
                                <div class="qty d-flex pt-2">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger px-3 border-right">Fshi</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="cart-submit"  class="btn font-baloo text-danger">Shto në Shportë</button>
                                    </form>

                                </div>
                                <!--!product qty-->

                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $ <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'];?></span>
                                </div>
                            </div>
                        </div>
                        <!--!card item-->
                        <?php
                        return $item['item_price'];
                    },$cart);
                endforeach;
                ?>

                <!--tjetra-->
                <?php
                foreach ($topsale->getDataFromTopSale('wishlist') as $item):
                    $cart=$topsale->getTopProduct($item['item_id']);

                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!--card item-->

                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'];?>" alt="cart1" class="img-fluid" style="height:120px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'];?></h5>
                                <small>by <?php echo $item['item_brand'];?></small>
                                <!--rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">3582 vota</a>
                                </div>
                                <!--!rating-->

                                <!--product qty-->
                                <div class="qty d-flex pt-2">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Fshi</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Shto në Shportë</button>
                                    </form>

                                </div>
                                <!--!product qty-->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $ <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'];?></span>
                                </div>
                            </div>
                        </div>
                        <!--!card item-->
                        <?php
                        return $item['item_price'];
                    },$cart);
                endforeach;
                ?>

                <!--tjetra-->
                <?php
                foreach ($newgames->getDataFromNewGames('wishlist') as $item):
                    $cart=$newgames->getNewGame($item['item_id']);

                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!--card item-->

                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'];?>" alt="cart1" class="img-fluid" style="height:120px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'];?></h5>
                                <small>by <?php echo $item['item_brand'];?></small>
                                <!--rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">3582 vota</a>
                                </div>
                                <!--!rating-->

                                <!--product qty-->
                                <div class="qty d-flex pt-2">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Fshi</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Shto në Shportë</button>
                                    </form>

                                </div>
                                <!--!product qty-->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $ <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'];?></span>
                                </div>
                            </div>
                        </div>
                        <!--!card item-->
                        <?php
                        return $item['item_price'];
                    },$cart);
                endforeach;
                ?>


            </div>
        </div>
        <!--!Shopping cart items-->

    </div>
</section>


<!--!shopping cart-->