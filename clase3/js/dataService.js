var dataService = new function () {
    var serviceBase = 'ajax/ajaxController.php?',
    
    validarPregunta = function (datos_form_serializados, callback) {
      
        $.ajax({
            type: "POST",
            dataType: "json",
            url: serviceBase ,
            data: 'op=validarPregunta&'+datos_form_serializados,
            success: function(data) {
                callback(data);
            },
            error: function(){
                alert(CONST_MSG_GENERICO_ERROR_EN_SERVIDOR);
            }
        }); 
    },

    return {        
        validarPregunta: validarPregunta,
        mostrarOcultarPreguntasEnPagina: mostrarOcultarPreguntasEnPagina,
        };

} ();