jQuery(document).ready(function($) {
    let headerHeight = $('header').height();
    console.log(headerHeight);
    //Блок партнеров
    let partnersBlock = $('.partners-block');
    let partnersBlockPosition = partnersBlock.offset().top;
    //Блок катка
    let iceRinkBlock = $('.ice-rink-block');
    let iceRinkBlockPosition = iceRinkBlock.offset().top;
    //Блок аренды
    let rentBlock = $('.rent-block');
    let rentBlockPosition = rentBlock.offset().top;
    //Блок контактов
    let contactsBlock = $('.contacts-block');
    let contactsBlockPosition = contactsBlock.offset().top;
    checkScroll();
    $(window).scroll(function() {
        checkScroll();
        activeMenu();
    });

    function checkScroll() {
        let scrollPosition = $(document).scrollTop();
        console.log(scrollPosition);
        if (scrollPosition >= headerHeight) {

            if (!$('.fix-header').hasClass('active')) {
                $('.fix-header').addClass('active');
            }
        } else {
            if ($('.fix-header').hasClass('active')) {
                $('.fix-header').removeClass('active');
            }
        }


    }

    function activeMenu() {
        let scrollPosition = $(document).scrollTop() + $(window).height() / 2;
        if (scrollPosition >= partnersBlockPosition) {
            if (scrollPosition >= iceRinkBlockPosition) {
                if (scrollPosition >= rentBlockPosition) {
                    if (scrollPosition >= contactsBlockPosition) {
                        if (scrollPosition >= contactsBlockPosition + contactsBlock.height()) {
                            if ($('.menu__list .active').length > 0) {
                                $('.menu__list .active').removeClass('active');
                            }
                        } else {
                            if ($('.menu__list .active').length > 0) {
                                $('.menu__list .active').removeClass('active');
                            }
                            if (!$('.menu_item_4').hasClass('active')) {
                                $('.menu_item_4').addClass('active');
                            }
                        }
                    } else {
                        if ($('.menu__list .active').length > 0) {
                            $('.menu__list .active').removeClass('active');
                        }
                        if (!$('.menu_item_3').hasClass('active')) {
                            $('.menu_item_3').addClass('active');
                        }
                    }
                } else {
                    if ($('.menu__list .active').length > 0) {
                        $('.menu__list .active').removeClass('active');
                    }
                    if (!$('.menu_item_2').hasClass('active')) {
                        $('.menu_item_2').addClass('active');
                    }
                }
            } else {
                if ($('.menu__list .active').length > 0) {
                    $('.menu__list .active').removeClass('active');
                }
                if (!$('.menu_item_1').hasClass('active')) {
                    $('.menu_item_1').addClass('active');
                }
            }
        } else {
            if ($('.menu__list .active').length > 0) {
                $('.menu__list .active').removeClass('active');
            }
        }
    }
})