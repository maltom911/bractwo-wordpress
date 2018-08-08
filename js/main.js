jQuery(document).ready(function ($) {
    slickSlider();
    showHeader();
    hideDoYouKnow();
    animateCuriosities();

function slickSlider() {
    $('.slider-images').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1000
    });
}


function showImages(el) {
    var windowHeight = jQuery(window).height();
    $(el).each(function () {
        var thisPos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (topOfWindow + windowHeight - 200 > thisPos) {
            $(this).addClass("fadeIn");
        }
    });
}

$(window).scroll(function () {
    showImages('.history-photo');
});

function showHeader() {
    $('.header-menu-container').fadeIn(2000);
    $('.header').hide();
    $('.header').slideDown(3500);
};

function hideDoYouKnow() {
    $('.do-you-know').hide(5000);
};

function animateCuriosities() {
    var time = 0;
    $('.animate').each(function () {
        $(this).delay(time).fadeIn(1000);
        time += 500;
    });
};

jQuery('.custom_upload_image_button').click(function() {
    formfield = jQuery(this).siblings('.custom_upload_image');
    preview = jQuery(this).siblings('.custom_preview_image');
    tb_show('', 'media-upload.php?type=image&TB_iframe=true');
    window.send_to_editor = function(html) {
        imgurl = jQuery('img',html).attr('src');
        classes = jQuery('img', html).attr('class');
        id = classes.replace(/(.*?)wp-image-/, '');
        formfield.val(id);
        preview.attr('src', imgurl);
        tb_remove();
    }
    return false;
});
 
jQuery('.custom_clear_image_button').click(function() {
    var defaultImage = jQuery(this).parent().siblings('.custom_default_image').text();
    jQuery(this).parent().siblings('.custom_upload_image').val('');
    jQuery(this).parent().siblings('.custom_preview_image').attr('src', defaultImage);
    return false;
});

jQuery('.repeatable-add').click(function() {
    field = jQuery(this).closest('td').find('.custom_repeatable li:last').clone(true);
    fieldLocation = jQuery(this).closest('td').find('.custom_repeatable li:last');
    jQuery('input', field).val('').attr('name', function(index, name) {
        return name.replace(/(\d+)/, function(fullMatch, n) {
            return Number(n) + 1;
        });
    })
    field.insertAfter(fieldLocation, jQuery(this).closest('td'))
    return false;
});
 
jQuery('.repeatable-remove').click(function(){
    jQuery(this).parent().remove();
    return false;
});
     
jQuery('.custom_repeatable').sortable({
    opacity: 0.6,
    revert: true,
    cursor: 'move',
    handle: '.sort'
});

});
