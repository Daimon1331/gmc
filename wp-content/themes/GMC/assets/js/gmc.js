jQuery(function($) {

    // $(function() {
    //     $('.minnav [href]').each(function() {
    //         if (this.href == window.location.href) {
    //             $(this).addClass('activenav');
    //         }
    //     });
    // });
    //
    //
    $('.menu-button').click(function () {
        $(".mob-nav").show();
        $(".menu-button").hide();
        $(".menu-cross").show();
        $("body").toggleClass("hidden");
    });
    $('.menu-cross').click(function () {
        $(".mob-nav").hide();
        $(".menu-button").show();
        $(".menu-cross").hide();
        $("body").toggleClass("hidden");
    });






    $('#preloader').fadeOut(1000,function(){$(this).remove();});



    // var phone = document.getElementById("phone");
    // var mail = document.getElementById("mail");
    // var name = document.getElementById("name");
    //
    // $('.input-mask__phone').inputmask('+375 (99) 999-99-99');
    // $('.input-mask__mail').inputmask({ alias: "email"});
    //
    //
    // phone.addEventListener("keyup", function (event) {
    //     console.log(phone.value);
    //     console.log(mail.value);
    //     if (phone.value.match(/\+375\s?[\(]{0,1}(25|29|33|44)[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}/)) {
    //         $("#phone").addClass("chek-valid");
    //         $("#phone").removeClass("chek-invalid");
    //     } else {
    //         $("#phone").addClass("chek-invalid");
    //         $("#phone").removeClass("chek-valid");
    //     }
    //     if (phone.value === "") {
    //         $("#phone").removeClass("chek-valid");
    //         $("#phone").removeClass("chek-invalid");
    //     }
    // });
    // mail.addEventListener("keyup", function (event) {
    //     console.log(mail.value);
    //     if (mail.value.match(/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/)) {
    //         $("#mail").addClass("chek-valid");
    //         $("#mail").removeClass("chek-invalid");
    //     } else {
    //         $("#mail").addClass("chek-invalid");
    //         $("#mail").removeClass("chek-valid");
    //     }
    //     if (mail.value === "") {
    //         $("#mail").removeClass("chek-valid");
    //         $("#mail").removeClass("chek-invalid");
    //     }
    // });
    // name.addEventListener("keyup", function (event) {
    //     console.log(name.value);
    //     if (name.value === "") {
    //         $("#name").removeClass("chek-valid");
    //         $("#name").removeClass("chek-invalid");
    //     } else {
    //         $("#name").addClass("chek-valid");
    //     }
    // });


    const swiper1 = new Swiper('.slider-doc .swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 40,
        // Navigation arrows
        navigation: {
            nextEl: '.slider-doc .swiper-button-next',
            prevEl: '.slider-doc .swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 480px
            500: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            // when window width is >= 640px
            700: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            1350: {
                slidesPerView: 5,
                spaceBetween: 40
            }
        }
    });

    const swiper2 = new Swiper('.slider-goods .swiper-container', {

        slidesPerView: 6,
        spaceBetween: 24,
        freeMode: true,
        grabCursor: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
        },
    });




    $(document).ready(function() {
        $('.slider-goods .swiper-slide-active').addClass("active-red-slide");
    });

    $('.slider-goods .swiper-slide').click(function () {
        $('.slider-goods .swiper-slide').removeClass("active-red-slide");
        $(this).addClass("active-red-slide");
    });



    const swiper3 = new Swiper('.subcategory .swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        // Navigation arrows
        navigation: {
            nextEl: '.subcategory .swiper-button-next',
            prevEl: '.subcategory .swiper-button-prev',
        },
    });

    $(".tabs-option .button-plus").click(function () {
        var quantity = this.previousElementSibling.innerHTML;
        quantity++;
        this.previousElementSibling.innerHTML = quantity;
    });
    $(".tabs-option .button-minus").click(function () {
        var quantity = this.nextElementSibling.innerHTML;
        if (+quantity >= 1) {
            quantity--;
            this.nextElementSibling.innerHTML = quantity;
        }
    });

    $(".quantity-basket .button-plus").click(function () {
        var quantity = this.previousElementSibling.innerHTML;
        var price = this.parentElement.parentElement.previousElementSibling.lastElementChild.innerHTML;
        quantity++;
        this.previousElementSibling.innerHTML = quantity;
        this.parentElement.parentElement.nextElementSibling.lastElementChild.innerHTML = (price * quantity).toFixed(2)
        $(document).ready(function(){
            var summ = 0;
            $(".cost>h3:last-child").each(function(){
                summ += parseInt($(this).html(), 10);
            })
            var sum = Number(summ).toFixed(2);
            console.log(sum);
            document.getElementById('total-min').innerHTML = sum;
            document.getElementById('total-min2').innerHTML = sum;
        });
    });

    $(".quantity-basket .button-minus").click(function () {
        var quantity = this.nextElementSibling.innerHTML;
        var price = this.parentElement.parentElement.previousElementSibling.lastElementChild.innerHTML;
        if (+quantity >= 1) {
            quantity--;
            this.nextElementSibling.innerHTML = quantity;
            this.parentElement.parentElement.nextElementSibling.lastElementChild.innerHTML = price * quantity
        }
        $(document).ready(function(){
            var summ = 0;
            $(".cost>h3:last-child").each(function(){
                summ += parseInt($(this).html(), 10);
            })
            var sum = Number(summ).toFixed(2);
            console.log(sum);
            document.getElementById('total-min').innerHTML = sum;
            document.getElementById('total-min2').innerHTML = sum;
        });
    });


    $(".subcategory .swiper-slide, .slider-doc .swiper-slide").click(function () {
        $("body").css("overflow", "hidden");
        $(".modal-swiper").addClass("modal-swiper-active");
        const swiper4 = new Swiper('.modal-swiper .swiper-container', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,
            // Navigation arrows
            navigation: {
                nextEl: '.modal-swiper .swiper-button-next',
                prevEl: '.modal-swiper .swiper-button-prev',
            },
        });
    });

    $(".btn-secondary").click(function () {
        $("body").css("overflow", "visible");
        $(".modal-swiper").removeClass("modal-swiper-active");
    });




});










