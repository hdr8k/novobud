jQuery(document).ready(function () {
    jQuery('.zoom-gallery').each(function() {
        jQuery(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled:true,
                arrowMarkup: '<button type="button" class="swiper-main-arrow swiper-main-%dir%">%title%</button>',
                tPrev: '',
                tNext: '',
            },

        });
    });
    let item = jQuery('.price-count'),
        num = +item.text();
    let result = num.toLocaleString();
    item.html(result);

    hideBuilding();

    jQuery(document).on('change', '#building-filter', function () {
        hideBuilding();
    })

    function hideBuilding() {
        jQuery.colorbox.remove();
        let value = jQuery('#building-filter').val(),
            item = jQuery(`.wrapper-plans[data-housing='${value}']`),
            children = item.find('.wrapper-map area');
        jQuery('.wrapper-plans').hide().find('.wrapper-map area').removeClass('lightbox_related_video3');
        item.show();
        children.addClass('lightbox_related_video3');

        jQuery(".lightbox_related_video3").colorbox({

            transition:'elastic',

            inline:true,

            rel:'lightbox5',

            fixed:false,

            maxWidth: '90%',

            maxHeight: '80%',

            innerWidth: '70%',

            innerHeight: '90%',

            opacity : 0.7,

        });
    }
})

