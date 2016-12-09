$(function(){

    var recipe_id = $('.recipe_id_hidden').val();

    // レシピのキャッツコピー欄を表示する
    $('.recipe_description_button').on('click', function() {
        $('.catch_copy_heading').css('display', 'none');
        $('.input_form').css('display', '');
    });

    $('.catch_copy_save_button').on('click', function() {
        $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
             }
        });

        $.ajax({
            type : "POST",
            url  : "/edit/saveCatchCopy",
            data : { recipe_id : 62,
                 catch_copy : $('.catch_copy_text').val()}
        }).done(function () {
        }).fail(function () {
        });

    return false;
    });

    // 材料リストを保存する。
    $('.save_ingredients').submit(function(event) {
        event.preventDefault();

        $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
             }
        });

        var $form = $(this);

        var array_query = $form.serializeArray();
        var ingredients_data = {};
        for (key in array_query) {
            var name = array_query[key]['name'];
            var value = array_query[key]['value'];

            ingredients_data[name] = value;
        }

        var $submit_button = $form.find('.ingredients_save_submit');

        $.ajax({
            type : $form.attr('method'),
            url  : $form.attr('action'),
            data : {'ingredients' : ingredients_data},
            timeout: 10000,
            beforeSend: function(jqXHR, settings) {
                // ボタンを無効化し、二重送信を防止
                $submit_button.attr('disabled', true);
            }
        }).done(function () {
            $form[0].reset();
        }).fail(function () {
        }).always(function () {
            // ボタンを有効化し、再送信を許可
            $submit_button.attr('disabled', false);
        });
    });
});
