$( document ).ready(function() {


    $("#submit").click(function (e) {
        e.preventDefault();
        console.log("ready");

        let nombreUsuario = $('#nombreUsuario').val();
        let contrasenaUsuario = $('#contrasenaUsuario').val();
        let emailUsuario = $('#emailUsuario').val();

        $.ajax({
            url: "signup.php",
            method: "post",
            data: {
                'nombreUsuario': nombreUsuario,
                'contrasenaUsuario': contrasenaUsuario,
                'emailUsuario': emailUsuario
        },
        success: function(data) {
            // sin esta linea el js llora por formatos
            let json = JSON.parse(data)
            if(json['success'] == true) {
                //aca hay que poner el codigo javascript para que se oculte
                //el login y signup (ya inicio sesion), y armar tipo una barra con 
                //mas opciones y para cerrar sesion.
                window.location.replace("./emailSent.html");
                $(document).ready(function() {
//                        $('.login-bt').hide();
//                       $('.my-acc').show();

                });
                //login successful
            } else {
                if(json['error'] == 'mail already used') {
                    alert('El correo electronico ya está en uso.');
                }
                if(json['error'] == 'invalid mail') {
                    alert('Correo electronico invalido');
                }
                // login failed
            }
        },
        error: function(data) {
            console.log("error");
            console.log(data);
        }

        });


    });


});
