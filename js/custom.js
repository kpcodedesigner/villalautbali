$(document).ready(function () {
//Header JS :: START
    $('.header_menu_click').on('click', function () {
        $('.header_main_navbar').slideToggle();
        $("body").toggleClass("menu_res_body");
    });
//Header JS :: END
//Testimonials (HOME PAGE) :: START
    $('.home_testimonial_slider').slick({
        nextArrow: ' <div class="slick_next_arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"><g><g><path fill="#b5b5b5" d="M10.765.172a.54.54 0 0 0-.805 0 .637.637 0 0 0 0 .851l4.085 4.364H.564c-.314 0-.564.267-.564.602 0 .336.25.611.564.611h13.481L9.96 10.955a.648.648 0 0 0 0 .86.54.54 0 0 0 .805 0l5.053-5.395a.62.62 0 0 0 0-.852z"/></g></g></svg></div>',
        prevArrow: '<div class="slick_prev_arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"><g><g><path fill="#b5b5b5" d="M5.236 11.827c.218.241.58.241.806 0a.637.637 0 0 0 0-.851L1.955 6.613H15.44c.315 0 .564-.268.564-.603 0-.336-.25-.611-.564-.611H1.955l4.087-4.355a.648.648 0 0 0 0-.86.54.54 0 0 0-.806 0L.182 5.579a.621.621 0 0 0 0 .852z"/></g></g></svg></div>',
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        fade: false,
        arrows: true,
        draggable: false,
        infinite: false,
        dots: false
    });
//Testimonials (HOME PAGE) :: END
//Villa Laut Bali SLIDER (HOME PAGE) :: START
    var slider = $(".home_villa_slider");
    slider.slick({
        nextArrow: ' <div class="slick_next_arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"><g><g><path fill="#b5b5b5" d="M10.765.172a.54.54 0 0 0-.805 0 .637.637 0 0 0 0 .851l4.085 4.364H.564c-.314 0-.564.267-.564.602 0 .336.25.611.564.611h13.481L9.96 10.955a.648.648 0 0 0 0 .86.54.54 0 0 0 .805 0l5.053-5.395a.62.62 0 0 0 0-.852z"/></g></g></svg></div>',
        prevArrow: '<div class="slick_prev_arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12"><g><g><path fill="#b5b5b5" d="M5.236 11.827c.218.241.58.241.806 0a.637.637 0 0 0 0-.851L1.955 6.613H15.44c.315 0 .564-.268.564-.603 0-.336-.25-.611-.564-.611H1.955l4.087-4.355a.648.648 0 0 0 0-.86.54.54 0 0 0-.806 0L.182 5.579a.621.621 0 0 0 0 .852z"/></g></g></svg></div>',
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: false,
        arrows: false,
        draggable: true,
        swipe: true,
        touchMove: true,
        responsive: [
//            {
//                breakpoint: 992,
//                settings: {
//                    slidesToShow: 3,
//                    slidesToScroll: 1
//                }
//            },
            {
                breakpoint: 576,
                settings: {
                    dots: false,
                    arrows: true,
                    vertical: false,
                }
            }
        ]
    });
//Villa Laut Bali SLIDER (HOME PAGE) :: END
//Accordion JS :: START
    var allPanels = $('.tab_content').hide();
    $(".active_content").show();
    $('.tab_drawer_heading').click(function () {
        if ($(this).hasClass('d_active')) {
            $(".tab_drawer_heading").removeClass("d_active");
            $('.tab_content').removeClass('active_content');
            allPanels.slideUp();
            $(this).next().slideUp();
            $(this).next().removeClass('active_content');
            $('.faq_content').removeClass('active_shadow');
        }
        else {
            $(".tab_drawer_heading").removeClass("d_active");
            $('.tab_content').removeClass('active_content');
            $('.faq_content').removeClass('active_shadow');
            $(this).addClass("d_active");
            allPanels.slideUp();
            $(this).next().slideDown();
            $(this).next().addClass('active_content');
            $(this).parent().addClass('active_shadow');
        }
        return false;
    });
//Accordion JS :: END
//DATEPICKER JS :: START
    $(".date_picker").datepicker({
//        showOn: "button",
//        buttonImage: "images/date_picker.png"
    });
//DATEPICKER JS :: END
});

