$( document ).ready(function() {
    
    var base_url = "http://localhost/proyectoAgricola/";
    
    //Funcion que perimite el inicio de sesión
    $("#bt_login").click(function(e){
        e.preventDefault();
        var email = $("#email_login").val();
        var clave = $("#clave_login").val();
       
        //envio de datos        
        $.ajax({
            url:base_url+'login',
            type:'post',
            dataType:'json',
            data:{email:email, clave:clave},
            success:function(o){
                if(o.msg ==="0"){
                    Materialize.toast("Usuario o Clave Incorrectos","4000");
                }else{
                    window.location.href = base_url+o.msg;
                }
                
            },
            error:function(){
                Materialize.toast("Error 500", "4000");
            }
        });
        
    });
    
    //Funcion que registra los datos en la base de datos
    
    $("#bt_registrar").click(function(e){
        e.preventDefault();
        var form = $("#form_registrar")[0];
        var data = new FormData(form);
        
        $.ajax({
            url: base_url+'crearCliente',
            type: 'POST',
            dataType: 'json',
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(o){
                Materialize.toast(o.msg,"4000");
            },
            error:function(){
                Materialize.toast("Error 500","4000");
            }
        })
    });
});
