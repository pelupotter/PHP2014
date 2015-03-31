var dataService = new function () {
    var serviceBase = 'ajax/ajaxController.php?',
    
    getDatosUsuario = function (datos_form_serializados, callback) {
      
        $.ajax({
            type: "POST",
            dataType: "json",
            url: serviceBase ,
            data: 'operacion=getDatosUsuario&'+datos_form_serializados,
            success: function(data) {
                callback(data);
            },
            error: function(){
                alert('Error en el pedido ajax');
            }
        }); 
    }

     getLocalidades = function (datos_form_serializados, callback) {
      
        $.ajax({
            type: "POST",
            dataType: "json",
            url: serviceBase ,
            data: 'operacion=getLocalidades&'+datos_form_serializados,
            success: function(data) {
                callback(data);
            },
            error: function(){
                alert('Error en el pedido ajax');
            }
        }); 
    }

    return {        
        getDatosUsuario: getDatosUsuario,
        getLocalidades: getLocalidades
    };

} ();