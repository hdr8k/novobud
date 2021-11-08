jQuery(document).ready(function () {
    jQuery('.form-send').submit(function (e) {
        e.preventDefault()
        var form_data = jQuery(this).serialize()
        jQuery.ajax({
            type: 'POST',
            url: '/feedback',
            data: form_data,
            success: function (data) {
                jQuery('.modal-window.active').addClass('form-send')
                jQuery('form input[name="phone"]').val('')
            }
        })
    })
})
