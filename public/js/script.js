$(document).ready(function(){
    $("#input-comprobante").on("change keyup blur input", function(e)
    {
        var tamano = $("#input-comprobante").val().length;
        if (tamano == 8) {
            //$("#input-nombres").val("trolanzo");
          // $("#input-apellidos").val("cabro");
            
            var comprobante = $("#input-comprobante").val();  
            
        //} 
        
        $.ajax({
            dataType: 'json',
            type: "GET",
            url: '/ncomprobante/62518450',
            
            data: {
                comprobante: 62518450,
            },
            success: function (resultado) {
                
                var registro = eval(resultado);
                               
                
                    $("#input-nombres").val(registro["nombreCliente"]);
                    $("#input-apellidos").val(registro["apellidos"]);
                    $("#input-documento").val(registro["documento"]);
                    $("#input-nombreproducto").val(registro["prdFullName"]);
                    $("#input-dcompra").val(registro["dcompra"]);    
                    $("#input-mventa").val(registro["mventa"]);
                    $("#input-prdFullName").val(registro["prdFullName"]);  
                    
                   //alert("holaa");
               
            }                   
                
            }); 
    } else {
        /*mensaje = "<p class='text-center mensaje-registro-valido' style='color:red; font-weight:bold;'>&nbsp;</p>";
        $(form + " #comprobacion-expe").html(mensaje);*/
        $("#input-nombres").val("");
        $("#input-apellidos").val("");
        $("#input-documento").val("");
        $("#input-nombreproducto").val("");
        $("#input-dcompra").val("");    
        $("#input-mventa").val("");
        $("#input-prdFullName").val("");
    }
});


});

