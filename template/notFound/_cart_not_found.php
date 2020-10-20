<!--shopping cart-->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shporta e Blerjeve</h5>

        <!--Shopping cart items-->
        <div class="row border-top py-3 mt-3">
            <div class="col-sm-9">
                <!--Empty Cart-->
                    <div class="row">
                        <div class="col-sm-12 text-center py-2">
                            <img src="./assets/cartempty.jpg" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                            <p class="font-baloo font-size-16 text-black-50">Shporta është bosh.</p>
                        </div>
                    </div>
                <!--!Empty Cart-->

                <!--tjetra-->
            </div>

            <!--subtotal-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Porositë tuaja përfitojnë transport FALAS! </h6>
                    <div class="border-top py-4">

                        <h5 class="font-baloo font-size-20">Subtotali ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> produkte):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? Cart::getSum($subTotal) : 0; ?></span> </span> </h5>

                        <button type="submit" class="btn btn-warning mt-3">Vazhdo me Blerjen</button>
                    </div>
                </div>
            </div>
            <!--subtotal-->
        </div>
        <!--!Shopping cart items-->

    </div>
</section>


<!--!shopping cart-->