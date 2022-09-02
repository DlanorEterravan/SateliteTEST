<center>
    <h1>Agregar Grado</h1>
</center>

<div class="container">
    <div class="form-control py-4">
        <form id="form_grd" class="form">
            <center><label for="grado">Nombre de grado</label></center>
            <div class="d-flex my-3 mx-3 ms-4">
                <input type="hidden" value="<?=base_url()?>" id="base_url">
                <input type="text" id="grado" class="form-control" placeholder="Nombre de Grado">
            </div>
        </form><br>
        <button id="guardar_grado" class="btn btn-success">Guardar Grado</button>
    </div>
</div>

<script src="<?php echo base_url();?>js/RegistrarGrado.js"></script>
