$(function(){

    $('form').on('submit', function(e){
        e.preventDefault();

        var form = $(e.target);

        form.ajaxSubmit({
            success: function(data) {
                if (data.status == 'ok') {
                    window.location = data.url;
                } else {
                    alert(data.message);
                }
            }
        });
    });

});
