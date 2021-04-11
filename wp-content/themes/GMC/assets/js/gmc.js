jQuery(function($) {
    $('.slidertitul').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"></button>'
    });


    // $(function() {
    //     $('.minnav [href]').each(function() {
    //         if (this.href == window.location.href) {
    //             $(this).addClass('activenav');
    //         }
    //     });
    // });
    //
    //
    // $('.menu-button').click(function () {
    //     $(".mob-nav").show();
    //     $(".menu-button").hide();
    //     $(".menu-cross").show();
    //     $("body").toggleClass("hidden");
    // });
    // $('.menu-cross').click(function () {
    //     $(".mob-nav").hide();
    //     $(".menu-button").show();
    //     $(".menu-cross").hide();
    //     $("body").toggleClass("hidden");
    // });








    // window.onscroll = function() {
    //     let scrolled = window.pageYOffset || document.documentElement.scrollTop;
    //
    //     if(scrolled > 2){
    //         $(".filters").addClass('filter-padding');
    //
    //     }
    //     if(2 > scrolled){
    //         $(".filters").removeClass('filter-padding');
    //
    //     }
    //
    //
    // };

    $('#preloader').fadeOut(1000,function(){$(this).remove();});



    var phone = document.getElementById("phone");
    var mail = document.getElementById("mail");
    var name = document.getElementById("name");

    $('.input-mask__phone').inputmask('+375 (99) 999-99-99');
    $('.input-mask__mail').inputmask({ alias: "email"});


    phone.addEventListener("keyup", function (event) {
        console.log(phone.value);
        console.log(mail.value);
        if (phone.value.match(/\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/)) {
            $("#phone").addClass("chek-valid");
            $("#phone").removeClass("chek-invalid");
        } else {
            $("#phone").addClass("chek-invalid");
            $("#phone").removeClass("chek-valid");
        }
        if (phone.value === "") {
            $("#phone").removeClass("chek-valid");
            $("#phone").removeClass("chek-invalid");
        }
    });
    mail.addEventListener("keyup", function (event) {
        console.log(mail.value);
        if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
            $("#mail").addClass("chek-valid");
            $("#mail").removeClass("chek-invalid");
        } else {
            $("#mail").addClass("chek-invalid");
            $("#mail").removeClass("chek-valid");
        }
        if (mail.value === "") {
            $("#mail").removeClass("chek-valid");
            $("#mail").removeClass("chek-invalid");
        }
    });
    name.addEventListener("keyup", function (event) {
        console.log(name.value);
        if (name.value === "") {
            $("#name").removeClass("chek-valid");
            $("#name").removeClass("chek-invalid");
        } else {
            $("#name").addClass("chek-valid");
        }
    });
});










