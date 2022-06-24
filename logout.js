$( document ).ready(function() {

    $("#submit").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "logout.php",
            method: "post",
            success: function() {
                if(json['success'] == true) {
                    window.location.replace("./index.php");
                    }
            },
            error: function(data) {
                console.log(data);
            }
        });

    });
});
