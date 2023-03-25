// ФОРМА
function submitForm() {
    let modal = $('#modalinfo');
    let message = modal.find('.form__message');

    modal.on('hidden.bs.modal', function (e) {
        message.html('');
    });

    $("[type=submit]").keyup(function(event){
        if(event.keyCode == 13){
            $(this).click();
        }
    });

    $('[type=submit]').on('click tab', function (e) {
        e.preventDefault();
        let form = $(this).closest('.form');
        let notspam = form.find('[name="notspam"]');
        notspam.val('Not spam');
        let fields = form.find('[required]');
        let url = form.attr('action');
        let formData = form.serialize();
        let empty = 0;

        fields.each(function (index, el) {
            if ($(this).val() === '') {
                $(this).addClass('invalid');
                empty++;
            } else {
                $(this).removeClass('invalid');
            }
        });

        setTimeout(function () {
            fields.removeClass('invalid');
        }, 1500);


        if (empty === 0) {
            $.ajax({
                url:url,
                type: "POST",
                dataType: "html",
                data: formData,
                success: function (responce) {
                    console.log('success');

                    $(".number_shipments_js").each(function() {
                        $(this).val('');
                    });
        
                    $("[data-price]").each(function() {
                        $(this).text('');
                    });
                    $('.js-calc-table-bottom').removeClass('calc__bottom_show');
                    $('.toTop').removeClass('calc_active');
                   
                    modal.modal('show');
                    // Пример с перенаправлением на другую страницу
                    // document.location.href = "js.html";
                    // Пример вывода текста в какой то блок
                    message.html('Спасибо за обращение!');
                    // console.log(message);
                    
                 

                    // message.text('Ваша форма успешно отправлена. <br> Мы свяжемся с вами в ближайшее время.');
                    // Дополнительно можно удалить текст из блока спустя какое то время
                    // setTimeout(function () {
                        //         message.html('');
                        //     }, 5000);
                    },
                    error: function (responce) {
                        console.log('error');
                        modal.modal('show');
                        message.html('Произошла ошибка при отправке. <br> Попробуйте отправить форму позже.');
                        // message.text('Произошла ошибка при отправке. <br> Попробуйте отправить форму позже.');
                        // setTimeout(function () {
                            //     message.html('');
                            // }, 5000);
                        }
                    })
                }
            });
}
submitForm();

function disabledButton() {
    $('.check_checked_js').on('change', function () {
        if ( $(this).prop('checked') ) {
            $(this).closest('.form').find('.btn_didisabled_js').attr('disabled', false);

        } else {
            $(this).closest('.form').find('.btn_didisabled_js').attr('disabled', true);
        }
    });

}
disabledButton();
