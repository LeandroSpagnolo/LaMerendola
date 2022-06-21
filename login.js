$( document ).ready(function() {

    $("#submit").click(function (e) {
        e.preventDefault();
        let nombreUsuario = $('#nombreUsuario').val();
        let contrasenaUsuario = $('#contrasenaUsuario').val();

        $.ajax({
            url: "login.php",
            method: "post",
            data: {
                'nombreUsuario': nombreUsuario,
                'contrasenaUsuario': contrasenaUsuario
            },
            success: function(data) {
                let json = JSON.parse(data)
                if(json['success'] == true) {
                    // succesfuly logged in
                    window.location.replace("./index.php");
                } else {
                    if(json['error'] == "1") {
                        // Esta baneada o puso mal los datos
                        console.log("1");
                        alert("Datos incorrectos o cuenta baneada o cuenta no verificada");

                    }
                }
            },
            error: function(data) {
                console.log(data);
            }
        });

    });
});