<!--shopping cart-->
<?php

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedRecord = $cart->deleteCart($_POST['item_id']);
        }
        if (isset($_POST['buy_submit'])){
            header("Location: http://localhost/project/diploma/fatura/fatura.php");
        }
        //saveforlater

        if (isset($_POST['wishlist-submit'])){
            $cart->saveForLater($_POST['item_id']);
        }
    }
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shporta e Blerjeve</h5>

        <!--Shopping cart items-->
        <div class="row">
            <div class="col-sm-9">
                <?php
                    foreach ($product->getDataFromProduct('cart') as $item):
                        $cart=$product->getProduct($item['item_id']);

                        if(!isset($_SESSION))
                           {
                            session_start();
                            }
                        $query = "SELECT item_name, item_price, item_type, item_image FROM product WHERE item_id =?";
                        $q = mysqli_stmt_init($con);

                        mysqli_stmt_prepare($q,$query);

                        //bind the statement

                        mysqli_stmt_bind_param($q,'i',$item['item_id']);

                        //execute sql statement
                        mysqli_stmt_execute($q);
                        $result = mysqli_stmt_get_result($q);
                        $row = mysqli_fetch_array($result);
                        $emri = array();
                        $cmimi = array();
                        $tipi = array();
                        $emri=$row['item_name'];
                        $cmimi = $row['item_price'];
                        $tipi = $row['item_type'];
                        $_SESSION['emer_produkti']=$emri;
                        $_SESSION['cmimi']=$cmimi;
                        $_SESSION['tipi']=$tipi;
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
                            <div class="d-flex font-rale w-25">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input data-id="<?php echo $item['item_id'] ?? '0'; ?>" type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Fshi</button>
                            </form>

                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Ruaj për më vonë</button>
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
                foreach ($topsale->getDataFromTopSale('cart') as $item):
                    $cart=$topsale->getTopProduct($item['item_id']);
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    $query = "SELECT item_name, item_price,item_type, item_image FROM product WHERE item_id =?";
                    $q = mysqli_stmt_init($con);

                    mysqli_stmt_prepare($q,$query);

                    //bind the statement

                    mysqli_stmt_bind_param($q,'i',$item['item_id']);

                    //execute sql statement
                    mysqli_stmt_execute($q);
                    $result = mysqli_stmt_get_result($q);
                    $row = mysqli_fetch_array($result);
                    $emri = array();
                    $cmimi = array();
                    $tipi = array();
                    $emri=$row['item_name'];
                    $cmimi = $row['item_price'];
                    $tipi = $row['item_type'];
                    $_SESSION['emer_produkti']=$emri;
                    $_SESSION['cmimi']=$cmimi;
                    $_SESSION['tipi']=$tipi;
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
                                    <div class="d-flex font-rale w-25">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input data-id="<?php echo $item['item_id'] ?? '0'; ?>" type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                    <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Fshi</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Ruaj për më vonë</button>
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

                <?php
                foreach ($newgames->getDataFromNewGames('cart') as $item):
                    $cart=$newgames->getNewGame($item['item_id']);
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    $query = "SELECT item_name, item_price,item_type, item_image FROM product WHERE item_id =?";
                    $q = mysqli_stmt_init($con);

                    mysqli_stmt_prepare($q,$query);

                    //bind the statement

                    mysqli_stmt_bind_param($q,'i',$item['item_id']);

                    //execute sql statement
                    mysqli_stmt_execute($q);
                    $result = mysqli_stmt_get_result($q);
                    $row = mysqli_fetch_array($result);
                    $emri = array();
                    $cmimi = array();
                    $tipi = array();
                    $emri=$row['item_name'];
                    $cmimi = $row['item_price'];
                    $tipi = $row['item_type'];
                    $_SESSION['emer_produkti']=$emri;
                    $_SESSION['cmimi']=$cmimi;
                    $_SESSION['tipi']=$tipi;
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
                                    <div class="d-flex font-rale w-25">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input data-id="<?php echo $item['item_id'] ?? '0'; ?>" type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Fshi</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Ruaj për më vonë</button>
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

            <!--subtotal-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Porositë tuaja përfitojnë transport FALAS! </h6>
                    <div class="border-top py-4">

                        <h5 class="font-baloo font-size-20">Subtotali ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> produkte):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? Cart::getSum($subTotal) : 0; ?></span> </span> </h5>
                        <?php
                        $totali=Cart::getSum($subTotal);
                        if(!isset($_SESSION))
                        {
                            session_start();
                        }
                        $_SESSION['totali']=$totali;
                        ?>
                        <form  method="post">
                            <button type="submit" name="buy_submit" class="btn btn-warning mt-3">Vazhdo me Blerjen</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--subtotal-->
        </div>
        <!--!Shopping cart items-->

    </div>
</section>


<!--!shopping cart-->