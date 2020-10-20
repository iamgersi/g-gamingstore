<?php
   $product_shuffle=$blog->getDataFromBlog();
?>
<!--Blogs-->
<section id="blogs">
    <div class="container py-4">
        <h4 class="font-rubik font-size-20">Të rejat e fundit</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){ ?>
            <div class="item">
                <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                    <h5 class="card-title font-size-16" style="font-weight: bold;"><?php echo $item['item_name'];?></h5>
                    <img src="<?php echo $item['item_image'];?>" alt="Blog 1" class="card-img-top">
                    <p class="card-text font-size-14 text-black-50 py-1"><?php echo $item['item_description']; ?>
                    </p>
                    <a href="<?php if($item['item_id']==1){echo "https://geekroom.al/gaming/item/900-nje-ps5-2tb-behet-leak-me-nje-cmim-te-cmendur";}elseif($item['item_id']==2){echo "https://geekroom.al/gaming/item/903-nga-neser-fortnite-do-te-ekzistoje-ne-dy-forma";}elseif($item['item_id']==3){echo "https://geekroom.al/gaming/item/888-nintendo-ka-lajmeruar-se-do-te-sjelle-nje-switch-te-ri";}elseif($item['item_id']==4){echo "https://geekroom.al/gaming/item/915-laptopi-me-i-fundit-gaming-i-lenovo-nuk-peshon-as-2kg";}elseif($item['item_id']==4){echo "https://geekroom.al/gaming/item/901-the-witcher-vjen-ne-version-mobile-ar";}elseif($item['item_id']==6){echo "https://geekroom.al/gaming/item/918-fortnite-chadwick-boseman-epic-games-marvel-loje-update";}?>" class="color-second text-left">Shiko më shumë</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--!Blogs-->