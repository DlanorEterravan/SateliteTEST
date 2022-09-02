$(document).ready(function(){
    $('#guardar_mxg').click(function(){
        data = {
            "grado" : $('#grado').val(),
            "materia" : $('#materia').val()
        }
        var url = $('#base_url').val();

        $.ajax({
            type: 'post',
            url: url+'mat_controller/validarMxg',
            data: data
        }).done(function (response) {
            if(response == "GOOD"){
                alert('datos completos')
                $('#form_mxg').trigger('reset');

            }else if(response == "FAIL"){
                alert('datos incompletos');
            }
        })
        
    });
    

    
});