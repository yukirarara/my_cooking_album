$(function() {

    // レシピ名を入力する
    $('#recipe_field').keyup(function () {
        if ($(this).val()) {
            $("#recipe_submit").prop("disabled", false);
        } else {
            $("#recipe_submit").prop("disabled", true);
        }
    });

    // レシピ名を投稿する
    $('#recipe_submit').on('click', function() {
        $.ajax({
           type: "POST",
           url: '/recipe/ajax-recipe',
           data: {'recipe_name': $('#recipe_field').val()},
           dataType: 'json',
        }).done(function (recipe_id) {
   console.log(recipe_id);
        }).fail(function(){
        });
     return false;
    });
});
