$(document).ready(function(){
    const url = 'http://localhost/Prueba_Codeigniter/';

    showMat();
    const select = $('#select_alm');

    const opcioncambiada = () => {
        var value = $('#select_alm').val();
        if(value == 0){
            showMat();
        }else{
            $('#tabla').html('hola');
            showMatById(value);
        }
    }

    select.change(opcioncambiada);

    function showMatById(data)
    {
        
    }
    function showMat(){/* Mostar alumnos en la tabla */
        $.ajax({
            url: url+'alm_controller/getAlmJS',
            type: 'get',
            dataType: 'json',
        }).then(function (data){
            let template = '';
            data.forEach(data => {
                template += `
                            <tr>
                                <td>${data.alm_codigo}</td>
                                <td>${data.alm_nombre}</td>
                                <td>${data.alm_edad} </td>
                                <td>${data.sexo_nombre}</td>
                                <td>${data.grd_nombre}</td>
                                <td>${data.alm_observacion}</td>
                                <td>${data.mxg}</td>
                            </tr>
                            `; 
            });

            $('#tabla').html(template);
        });
    }
});