$(document).ready(function(){
    $('#guardar_datos').click(function(){
        data = {
            "codigo" : $('#codigo').val(),
            "nombre" : $('#nombre').val(),
            "edad" : $('#edad').val(),
            "sexo" : $('#sexo').val(),
            "grado" : $('#grado').val(),
            "descripcion" : $('#descripcion').val()
        }

        var url = $('#base_url').val();
        $.ajax({
            type: 'post',
            url: url+'alm_controller/ValidarForm',
            data: data
        }).done(function (response) {
            if(response == "GOOD"){
                alert('datos correctos')
                $('#form').trigger('reset');

            }else if(response == "FAIL"){
                alert('datos incorrectos');
            }
        })
        
    });

    

})