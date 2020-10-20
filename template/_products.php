<!--product-->
<?php
    $item_id=$_GET['item_id'] ?? 1;
    foreach ($product->getDataFromProduct() as $item):
        if ($item['item_id']==$item_id) :
?>

            <?php
            if ($_SERVER['REQUEST_METHOD']=="POST"){
                if (isset($_POST['product_submit'])){
                    //call function addToCart
                    $cart->addToCart($_POST['user_id'],$_POST['item_id']);
                }
            }

            ?>
            <?php
            $in_cart = $cart->getCartId($topsale->getData('cart'));
            ?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']; ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Bli Tani</button>
                    </div>
                    <div class="col">
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">

                        <?php if (in_array($item['item_id'], $in_cart ?? [])){
                            echo ' <button type="submit" disabled name="product_submit" class="btnSubmit form-control btn btn-success font-size-16">Në Shportë</button>';
                        }else{
                            echo ' <button type="submit" name="product_submit" class="btnSubmit form-control btn btn-warning font-size-16">Shto në Shportë</button>';
                        }
                        ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">2585 vota | 200+ u përgjigjen</a>
                </div>
                <hr class="mr-0">

                <!--product price-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Çmimi i mëparshëm:</td>
                        <td><strike>$<?php echo $item['item_firstprice'];?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Çmimi me Ofertë:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;me TVSH</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Kursim:</td>
                        <td><span class="font-size-16 text-danger">$<?php $kursimi=$item['item_firstprice']-$item['item_price']; echo $kursimi;?></span></td>
                    </tr>
                </table>
                <!--!product price-->

                <!--#policy-->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Ditë <br>Zëvendësim</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Transporti Falas</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">6 muaj Garanci</a>
                        </div>
                    </div>
                    <!--!policy-->

                    <hr>
                    <!--order details-->
                    <div id="order-details" class="font-rale d-flex flex-column text-dark">
                        <small>Dërgua më: Mars 29 - Prill 1</small>
                        <small>Blerë nga: <a href="#">Daily Electronics</a>(4.5 nga 5 | 3487 vota)</small>
                        <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Dërguar te Klienti - 214</small>
                    </div>
                    <!--!order details-->

                    <div class="row">
                        <div class="col-6">
                            <!--color-->
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-baloo">Ngjyra:</h6>
                                    <div class="p-2 color-black-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                    <div class="p-2 color-grey-bg rounded-circle">
                                        <button class="btn font-size-14"></button>
                                    </div>
                                </div>
                            </div>
                            <!--!color-->
                        </div>
                        <div class="col-6">
                            <!--product qty section-->
                            <div class="qty d-flex">
                                <h6 class="font-baloo">Sasia</h6>
                                <div class="px-4 d-flex font-rale">
                                    <button class="qty-up border bg-light" data-id="prod1"><i class="fas fa-angle-up"></i></button>
                                    <input data-id="prod1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                    <button data-id="prod1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--dpi-->
                    <?php if($item['item_type']=="mouse" || $item['item_type']=="keyboard" || $item['item_type']=="mic" || $item['item_type']=="webcam" || $item['item_type']=="monitor"){?>
                    <div class="dpi my-3">
                        <h6><?php if($item['item_type']=="mouse"){ echo "Dpi (dots/inch)";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad" || $item['item_type']=="monitor"){echo "Madhësia";} elseif($item['item_type']=="mic"){echo "I aksesueshëm me ndryshues zëri";}elseif($item['item_type']=="webcam"){echo "Rezolucioni i kamerës";}?></h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "1200 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "small";} elseif($item['item_type']=="mic"){echo "PO";}elseif($item['item_type']=="webcam"){echo "720p";}elseif($item['item_type']=="monitor"){echo "24'";}?></button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "2400 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "medium";} elseif($item['item_type']=="mic"){echo "JO";}elseif($item['item_type']=="webcam"){echo "1080p";}elseif($item['item_type']=="monitor"){echo "28'";}?></button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "4200 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "large";} elseif($item['item_type']=="webcam"){echo "4K";}elseif($item['item_type']=="mic"){echo "Software Perkates";}elseif($item['item_type']=="monitor"){echo "32'";}?></button>
                            </div>
                        </div>
                    </div>
                    <?php }
                    ?>
                    <!--!dpi-->


                </div>
            </div>

            <div class="col-12">
                <h6 class="font-rubik">Përshkrimi i produktit</h6>
                <hr>
                <p class="font-rale font-size-14"><i class="fas fa-circle"></i><?php echo $item['item_description']; ?></p>
            </div>

        </div>
    </div>
</section>
<?php
    endif;
    endforeach;
?>

<?php
$item_id=$_GET['item_id'] ?? 1;
foreach ($topsale->getDataFromTopSale() as $item):
    if ($item['item_id']==$item_id) :
        ?>


        <?php
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            if (isset($_POST['product_submit'])){
                //call function addToCart
                $cart->addToCart($_POST['user_id'],$_POST['item_id']);
            }
        }

        ?>

        <?php
        $in_cart = $cart->getCartId($topsale->getData('cart'));
        ?>

        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image']; ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Bli Tani</button>
                            </div>
                            <div class="col">
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '25'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo ' <button type="submit" name="product_submit" disabled class="btnSubmit form-control btn btn-success font-size-16">Në Shportë</button>';
                                }else{
                                    echo ' <button type="submit" name="product_submit" class="btnSubmit form-control btn btn-warning font-size-16">Shto në Shportë</button>';
                                }
                                ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">2585 vota | 200+ u përgjigjen</a>
                        </div>
                        <hr class="mr-0">

                        <!--product price-->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Çmimi i mëparshëm:</td>
                                <td><strike>$<?php echo $item['item_firstprice'];?></strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Çmimi me Ofertë:</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;me TVSH</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Kursim:</td>
                                <td><span class="font-size-16 text-danger">$<?php $kursimi=$item['item_firstprice']-$item['item_price']; echo $kursimi;?></span></td>
                            </tr>
                        </table>
                        <!--!product price-->

                        <!--#policy-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 Ditë <br>Zëvendësim</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Transporti Falas</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">6 muaj Garanci</a>
                                </div>
                            </div>
                            <!--!policy-->

                            <hr>
                            <!--order details-->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Dërgua më: Mars 29 - Prill 1</small>
                                <small>Blerë nga: <a href="#">Daily Electronics</a>(4.5 nga 5 | 3487 vota)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Dërguar te Klienti - 214</small>
                            </div>
                            <!--!order details-->

                            <div class="row">
                                <div class="col-6">
                                    <!--color-->
                                    <div class="color my-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-baloo">Ngjyra:</h6>
                                            <div class="p-2 color-black-bg rounded-circle">
                                                <button class="btn font-size-14"></button>
                                            </div>
                                            <div class="p-2 color-grey-bg rounded-circle">
                                                <button class="btn font-size-14"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--!color-->
                                </div>
                                <div class="col-6">
                                    <!--product qty section-->
                                    <div class="qty d-flex">
                                        <h6 class="font-baloo">Sasia</h6>
                                        <div class="px-4 d-flex font-rale">
                                            <button class="qty-up border bg-light" data-id="prod1"><i class="fas fa-angle-up"></i></button>
                                            <input data-id="prod1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                            <button data-id="prod1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--dpi-->
                            <?php if($item['item_type']=="mouse" || $item['item_type']=="keyboard" || $item['item_type']=="mic" || $item['item_type']=="webcam" || $item['item_type']=="monitor"){?>
                                <div class="dpi my-3">
                                    <h6><?php if($item['item_type']=="mouse"){ echo "Dpi (dots/inch)";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad" || $item['item_type']=="monitor"){echo "Madhësia";} elseif($item['item_type']=="mic"){echo "I aksesueshëm me ndryshues zëri";}elseif($item['item_type']=="webcam"){echo "Rezolucioni i kamerës";}?></h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "1200 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "small";} elseif($item['item_type']=="mic"){echo "PO";}elseif($item['item_type']=="webcam"){echo "720p";}elseif($item['item_type']=="monitor"){echo "24'";}?></button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "2400 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "medium";} elseif($item['item_type']=="mic"){echo "JO";}elseif($item['item_type']=="webcam"){echo "1080p";}elseif($item['item_type']=="monitor"){echo "28'";}?></button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "4200 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "large";} elseif($item['item_type']=="webcam"){echo "4K";}elseif($item['item_type']=="mic"){echo "Software Perkates";}elseif($item['item_type']=="monitor"){echo "32'";}?></button>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <!--!dpi-->


                        </div>
                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik">Përshkrimi i produktit</h6>
                        <hr>
                        <p class="font-rale font-size-14"><?php echo $item['item_description']; ?></p>
                    </div>

                </div>
            </div>
        </section>


        <?php
        endif;
    endforeach;
?>

<?php
$item_id=$_GET['item_id'] ?? 1;
foreach ($newgames->getDataFromNewGames() as $item):
    if ($item['item_id']==$item_id) :
        ?>


        <?php
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            if (isset($_POST['product_submit'])){
                //call function addToCart
                $cart->addToCart($_POST['user_id'],$_POST['item_id']);
            }
        }

        ?>

        <?php
        $in_cart = $cart->getCartId($topsale->getData('cart'));
        ?>

        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image']; ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Bli Tani</button>
                            </div>
                            <div class="col">
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '25'; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <?php if (in_array($item['item_id'], $in_cart ?? [])){
                                        echo ' <button type="submit" name="product_submit" disabled class="btnSubmit form-control btn btn-success font-size-16">Në Shportë</button>';
                                    }else{
                                        echo ' <button type="submit" name="product_submit" class="btnSubmit form-control btn btn-warning font-size-16">Shto në Shportë</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">2585 vota | 200+ u përgjigjen</a>
                        </div>
                        <hr class="mr-0">

                        <!--product price-->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Çmimi i mëparshëm:</td>
                                <td><strike>$<?php echo $item['item_firstprice'];?></strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Çmimi me Ofertë:</td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;me TVSH</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Kursim:</td>
                                <td><span class="font-size-16 text-danger">$<?php $kursimi=$item['item_firstprice']-$item['item_price']; echo $kursimi;?></span></td>
                            </tr>
                        </table>
                        <!--!product price-->

                        <!--#policy-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 Ditë <br>Zëvendësim</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Transporti Falas</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">6 muaj Garanci</a>
                                </div>
                            </div>
                            <!--!policy-->

                            <hr>
                            <!--order details-->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Dërgua më: Mars 29 - Prill 1</small>
                                <small>Blerë nga: <a href="#">Daily Electronics</a>(4.5 nga 5 | 3487 vota)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Dërguar te Klienti - 214</small>
                            </div>
                            <!--!order details-->

                            <div class="row">
                                <div class="col-6">
                                    <!--color-->
                                     <?php if($item['item_type']!="videogame"){
                                    ?>
                                    <div class="color my-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-baloo">Ngjyra:</h6>
                                            <div class="p-2 color-black-bg rounded-circle">
                                                <button class="btn font-size-14"></button>
                                            </div>
                                            <div class="p-2 color-grey-bg rounded-circle">
                                                <button class="btn font-size-14"></button>
                                            </div>
                                        </div>
                                    </div>
                                         <?php
                                     }
                                     ?>
                                    <!--!color-->
                                </div>
                                <div class="col-6">
                                    <!--product qty section-->
                                    <?php if($item['item_type']!="videogame"){
                                    ?>
                                    <div class="qty d-flex">
                                        <h6 class="font-baloo">Sasia</h6>
                                        <div class="px-4 d-flex font-rale">
                                            <button class="qty-up border bg-light" data-id="prod1"><i class="fas fa-angle-up"></i></button>
                                            <input data-id="prod1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                            <button data-id="prod1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>

                            <!--dpi-->
                            <?php if($item['item_type']=="mouse" || $item['item_type']=="keyboard" || $item['item_type']=="mic" || $item['item_type']=="webcam" || $item['item_type']=="monitor"){?>
                                <div class="dpi my-3">
                                    <h6><?php if($item['item_type']=="mouse"){ echo "Dpi (dots/inch)";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad" || $item['item_type']=="monitor"){echo "Madhësia";} elseif($item['item_type']=="mic"){echo "I aksesueshëm me ndryshues zëri";}elseif($item['item_type']=="webcam"){echo "Rezolucioni i kamerës";}?></h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "1200 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "small";} elseif($item['item_type']=="mic"){echo "PO";}elseif($item['item_type']=="webcam"){echo "720p";}elseif($item['item_type']=="monitor"){echo "24'";}?></button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "2400 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "medium";} elseif($item['item_type']=="mic"){echo "JO";}elseif($item['item_type']=="webcam"){echo "1080p";}elseif($item['item_type']=="monitor"){echo "28'";}?></button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14"><?php if($item['item_type']=="mouse"){ echo "4200 dpi";}elseif($item['item_type']=="keyboard" || $item['item_name']=="LogiTECH Mousepad"){echo "large";} elseif($item['item_type']=="webcam"){echo "4K";}elseif($item['item_type']=="mic"){echo "Software Perkates";}elseif($item['item_type']=="monitor"){echo "32'";}?></button>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                            <!--!dpi-->


                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <h6 class="font-rubik">Përshkrimi i produktit</h6>
                        <hr>
                        <p class="font-rale font-size-14"><?php echo $item['item_description']; ?></p>
                    </div>

                </div>
            </div>
        </section>


    <?php
    endif;
endforeach;
?>


<!--!product-->
