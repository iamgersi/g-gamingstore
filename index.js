$(document).ready(function(){
    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1
    });

    //top-sale owl carousel

    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //isotope filter

    var $grid=$(".grid").isotope({
        itemSelector:".grid-item",
        laoyutMode:'fitRows'
    });
    //filter items on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');

        $grid.isotope({filter:filterValue});
    })

    //2020-videogames carousel
    $("#2020-games .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                item:4
            },
            1300:{
                items:6
            }

        }
    });

    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })
    //blogs owl carousel

    //product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");

    //click event qty up
    $qty_up.click(function(e){

        //change product price using ajax
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val()>=1 && $input.val()<=9){

                    $input.val(function(i,oldval){
                        return ++oldval;
                    });

                }
                //increase price of the product
                $price.text(parseInt(item_price * $input.val()).toFixed(2));

                //set subtotal price
                let subtotal = parseInt($deal_price.text())+parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
        }});
        //closing ajax
    });

    //click event qty down
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    });

});



