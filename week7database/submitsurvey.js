$(document).ready(function(){


    $("#submit").click(function() {
        var username = $("#username").val();
        var password = $("#password").val();


        // AJAX Code To Submit Form.
        $.ajax({
            type: "POST",
            url: "login.php",
            data: null,
            cache: false,
            success: function (result) {
                alert(result);
            }
        });

    });
});