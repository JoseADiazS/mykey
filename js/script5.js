jQuery(document).ready(function() {
	$('#reg').on('submit', function(event) {
        //Previene que suceda el evento default
        event.preventDefault();
        //validamos los campos
        if(document.getElementById("password").value == document.getElementById("password_confirmation").value){
            //Serializamos los datos del formulario
            var form_data = $(this).serialize();
            //Realizamos la petición ajax
            $.ajax({
                url: "../My_Key/acciones.php",
                method: "POST",
                data: form_data,
                success: function(data){
                    if(data.trim() == "OK"){
                        $('#reg')[0].reset();
                        document.getElementById("msg").innerHTML = '<br><div class="alert alert-success"><strong>Correcto!</strong> Cuenta registrada con exito.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                        //window.location.replace("backend/home.php");

                    }else if(data.trim() == "YA"){
                        document.getElementById("msg").innerHTML = '<br><div class="alert alert-danger"><strong>Error!</strong> Usuario ya registrado.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                    }
                    else{
                        document.getElementById("msg").innerHTML = '<br><div class="alert alert-danger"><strong>Error!</strong> Avise al administrador del sitio.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                    }
                }

            })}else{
            document.getElementById("msg").innerHTML = '<br><div class="alert alert-warning"><strong>Advertencia!</strong> Contraseñas deben ser iguales.</div>';
        }
    });

$('#login').on('submit', function(event) {
        //Previene que suceda el evento default
        event.preventDefault();
        //validamos los campos

            //Serializamos los datos del formulario
            var form_data = $(this).serialize();
            //Realizamos la petición ajax
            $.ajax({
                url: "../My_Key/acciones.php",
                method: "POST",
                data: form_data,
                success: function(data){
                    if(data == "OK"){
                        $('#login')[0].reset();
                        window.location.replace("index.php");

                    }else if (data=="NO"){
                        document.getElementById("msg").innerHTML = '<br><div class="alert alert-danger"><strong>Error!</strong> Contraseña Incorrecta.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                    }else{
                         document.getElementById("msg").innerHTML = '<br><div class="alert alert-danger"><strong>Error!</strong>Avise al administrador del sitio.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                    }
                }
            })


    });


    $('#cerrajero').on('submit', function(event) {
        //Previene que suceda el evento default
        event.preventDefault();
        //validamos los campos
        if(document.getElementById("password").value == document.getElementById("password_confirmation").value){
            //Serializamos los datos del formulario
            var form_data = $(this).serialize();
            //Realizamos la petición ajax
            $.ajax({
                url: "../My_Key/acciones.php",
                method: "POST",
                data: form_data,
                success: function(data){
                    if(data.trim() == "OK"){
                        $('#cerrajero')[0].reset();
                        document.getElementById("msg").innerHTML = '<br><div class="alert alert-success"><strong>Correcto!</strong> Cerrajero registrado con exito.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                        //window.location.replace("backend/home.php");

                    }else if(data.trim() == "YA"){
                        document.getElementById("msg").innerHTML = '<br><div class="alert alert-danger"><strong>Error!</strong> Usuario ya registrado.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                    }
                    else{
                        document.getElementById("msg").innerHTML = '<br><div class="alert alert-danger"><strong>Error!</strong> Avise al administrador del sitio.</div>';
                        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                            $(this).remove();
                        });
                    }
                }

            })}else{
            document.getElementById("msg").innerHTML = '<br><div class="alert alert-warning"><strong>Advertencia!</strong> Contraseñas deben ser iguales.</div>';
        }
    });

});




