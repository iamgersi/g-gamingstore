<?php
require_once("../register/mysqli_connect.php");
require("../fatura/utils.php");
require_once("../register/helper.php");

$user = array();

if (isset($_SESSION['SBUser'])){
    $user = user_info($con,$_SESSION['SBUser']);
}

?>

<section id="main-site">
    <div class="container py-5">
        <div class="row">

            <h2 class="font-ubuntu text-center text-success">Blerja juaj u krye me sukses!</h2> <br>
            <div class="col">
                <h2 class="font-ubuntu text-center text-success">Ju falenderojmë!</h2> <br>

            </div>
            <div class=" offset-4 shadow py-4">

                <div class="justify-content-center pb-5">

                    <p class="font-baloo font-size-16">Klienti që kreu porosinë: <?php if(isset($user['first_name'])) printf('%s  %s',$user['first_name'],$user['last_name']);?></p>
                    <p class="font-baloo font-size-16">Adresa: <?php if(isset($user['first_name'])) echo $user['address'];?></p>
                    <p class="font-baloo font-size-16">Produkti: <?php if(isset($_SESSION['emer_produkti'])) echo $_SESSION['emer_produkti'];?></p>
                    <p class="font-baloo font-size-16">Kategoria: <?php if(isset($_SESSION['tipi'])) echo $_SESSION['tipi'];?></p>
                    <p class="font-baloo font-size-16">Cmimi: $<?php if(isset($_SESSION['cmimi'])) echo $_SESSION['cmimi'];?></p>
                    <p class="font-baloo font-size-16">Totali: $<?php if(isset($_SESSION['totali'])) echo $_SESSION['totali'];?></p>


                </div>
            </div>
        </div>
    </div>
</section>
