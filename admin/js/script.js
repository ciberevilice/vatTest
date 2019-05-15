/**
 * Created by Администратор on 22.11.2016.
 */


$(document).ready(function(){
    $('.Authbutton').click(function(e){
        e.preventDefault();
        var msg   = $('.login').serialize();
        $.ajax({
            type: 'post',
            url: 'auth.php',
            cache: false,
            data: msg,
            success: function(data) {
                $('#results').html(data);
            },
        });
    })
})
