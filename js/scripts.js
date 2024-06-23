$(document).ready(function() {
    $(function () {
        var check = $('.check', this),
            email = $('.input-mail', this),
            tel = $('.input-tel', this),
            // area = $('.form-textarea', this),
            message = $('.alert-message', this);
            tel.keypress(function (e) {
                if ((e.keyCode < 48 || e.keyCode > 57) && 43 != e.keyCode) {
                    this.value += '';
                    message.text('Только цифры!').slideDown(500);
                    return false
                } else {
                    message.slideUp(500);
                }
            });
        $(".form").on("submit", function () {
            var check = $('.check', this),
                message = $('.alert-message', this),
                reNone = /.+/,
                email = $('.input-mail', this),
                tel = $('.input-tel', this),
                area = $('.form-textarea', this);
            if (!email.val().match(reNone)) {
                email.css('borderColor','red');
                message.text('Введите email').slideDown(500);
                return false;
            }
            if (!tel.val().match(reNone)) {
                tel.css('borderColor','red');
                message.text('Введите телефон').slideDown(500);
                return false;
            }
            if (!check.prop("checked")) {
                check.next().css({
                    'color': 'red',
                    'transition': 'all .4s ease'
                });
                check.next().children().css({
                    'color': 'red',
                    'transition': 'all .4s ease'
                });
                message.text('↙ Подтвердите соглашение').slideDown(500);
                return false;
            }
            if (email.val() && check) {

                // button.text('Отправляем...');
                // setTimeout(function () {
                //     button.text('Отправлено!');
                // }, 500);
                return true
            }
        });
        email.click(function () {
            email.css('border','none');
            message.slideUp(500);
        });
        tel.click(function () {
            tel.css('border','none');
            message.slideUp(500);
        });
        check.click(function () {
            check.next().css({
                "color": "#fff",
                'transition': 'all .4s ease'
            });
            check.next().children().css({
                "color": "#fff",
                'transition': 'all .4s ease'
            });
            message.slideUp(500);
        });
    });
 /* Якорь */
 $("a[href^='#']").click(function (h) {
    h.preventDefault();
    var f = $(this).attr("href"),
        g = $(f).offset().top;
    $("body,html").animate({
        scrollTop: g
    }, 1500)
});

/*Конец документа*/
});