$(document).ready(function(){
    $("#iniciar").click(function(){
        var user = $("#user").val();
        var pass = $("#pass").val();
        //$("#error").css('color','#3498DB');
        if( user != "" && pass != ""){
            $.ajax({
                url: '../controllers/login.php',
                data: {
                    usuario: user,
                    password: pass
                },
                type : 'POST',
                dataType : 'json',
                success: function(datos){
                    if(datos.success){
                        window.location = 'Pinicio.php';
                    }else{
                        $("#error").text('Usuario o contraseña invalidos');
                    }
                }
            });
        }else{
            $("#error").text('Usuario o contraseña vacios');
        }
    });
    
});