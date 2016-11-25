$(function(){
    // レシピ名を入力する
    $('#recipe_field').keyup(function() {
        if ($(this).val()) {
            $('#recipe_submit').prop('disabled', false);
        } else {
            $('#recipe_submit').prop('disabled', true);
        }
    });
});
