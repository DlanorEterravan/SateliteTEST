<div class="container">
    <center>
        <select name="alumno" id="select_alm" class="form-control" >
            <option value="0">Todos los alumno... </option>
            <option value="1">Prueba </option>
        </select>
    </center>
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Codigo del Alumno</th>
                <th>Nombre del Alumno</th>
                <th>Edad del Alumno</th>
                <th>Sexo del Alumno</th>
                <th>Grado del Alumno</th>
                <th>Observacion del Alumno</th>
                <th>Materias del Grado</th>
            </tr>
        </thead>

        <tbody id="tabla"></tbody>
    </table>
</div>

<script src="<?php echo base_url();?>js/MostrarAlm.js"></script>