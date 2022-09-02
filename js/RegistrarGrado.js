$(document).ready(function(){
    $('#guardar_grado').click(function(){
        data = {
            "grado" : $('#grado').val(),
        }

        var url = $('#base_url').val();
        /* console.log(data); */
        $.ajax({
            type: 'post',
            url: url+'grd_controller/validarGrd',
            data: data
        }).done(function (response) {
            if(response == "GOOD"){
                alert('datos correctos')
                $('#form_grd').trigger('reset');

            }else if(response == "FAIL"){
                alert('datos incorrectos');
            }
        })
        
    });

    

})