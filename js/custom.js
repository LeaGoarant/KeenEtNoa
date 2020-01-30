(function ($) {
    jQuery(function ($) {
        $('.keencustom').click(function (e) {
            var $el = $(this).parent();
            e.preventDefault();
            console.log('test');
            var uploader = wp.media({
                title: 'Evoyer une image',
                button: {
                    text: 'Choisir un fichier'
                },
                multiple: false
            })
                .on('select', function () {
                    var selection = uploader.state().get('selection');
                    var attachement = selection.first().toJSON();
                    console.log(attachement);
                    $('input' , $el).val(attachement.url);
                    $('img' , $el).attr('src' , attachement.url);

                })
                .open();

        })
        $('.keencustomban').click(function (e) {
            var $el = $(this).parent();
            e.preventDefault();
            console.log('test');
            var uploader = wp.media({
                title: 'Evoyer une image',
                button: {
                    text: 'Choisir un fichier'
                },
                multiple: false
            })
                .on('select', function () {
                    var selectione = uploader.state().get('selection');
                    var attachemente = selectione.first().toJSON();
                    console.log(attachemente);
                    $('input' , $el).val(attachemente.url);
                    $('img' , $el).attr('src' , attachemente.url);

                })
                .open();

        })
    })
})(jQuery);

