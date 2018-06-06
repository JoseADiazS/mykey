$('#reg').on('submit', function(event) {
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
                    if(data.trim() == "OK"){
                        $('#reg')[0].reset();
                        document.getElementById("msg").innerHTML = '<div class="alert alert-success"><strong>Success!</strong> Indicates a successful or positive action.</div>';
                        //window.location.replace("backend/home.php");

                    }else{
                        document.getElementById("msg").innerHTML = "Error";
                    }
                }
            })
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
                        document.getElementById("msg").innerHTML = '<div class="alert alert-danger"><strong>Success!</strong> ERROR CONTRASEÑA.</div>';
                    }else{
                        document.getElementById("msg").innerHTML = data;
                    }
                }
            })
    });
