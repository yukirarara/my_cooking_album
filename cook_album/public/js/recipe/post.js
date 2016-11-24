$(function(){
    // レシピ名を入力する
    $('#recipe_field').keyup(function() {
        if ($(this).val()) {
            $('#recipe_submit').prop('disabled', false);  
        } else {
            $('#recipe_submit').prop('disabled', true);
        }
    });
    
    // レシピを投稿する
    $('#recipe_submit').on('click', function() {

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
        }
        });

        $.ajax({
            type : "POST",
            url  : "/post/getPostRecipeId",
            data : { recipe_name : $('#recipe_field').val() } ,
            dataType : "json",
        }).done(function ($new_recipe_id) {
            location.href = "/recipe/" + $new_recipe_id;
        }).fail(function () {
        });

    return false;
    });
});
