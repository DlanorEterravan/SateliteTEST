<center>
    <h1>Agregar Materia a un Grado</h1>
</center>

<div class="container">
    <div class="form-control py-4">
        <form id="form_mxg" class="form">
                <div class="d-flex m-5">
                    <div class="form-control m-3">
                    <input type="hidden" value="<?=base_url()?>" id="base_url">
                        <center><label  for="grado">Grado</label></center>
                        <select class="form-control" name="text" id="grado">
                            <option class="form-control" value="">Selecione el grado...</option>
                            <?php foreach($grado as $grado){?>
                                <option class="form-control" value="<?php echo $grado['grd_id']; ?>"> <?php echo ucfirst($grado['grd_nombre']); ?></option>
                                <?php } ?>
                        </select><br>
                    </div>
                    <div class="form-control m-3">
                        <center><label  for="grado">Materia</label></center>
                        <select class="form-control" name="text" id="materia">
                            <option class="form-control" value="">Selecione la materia...</option>
                            <?php foreach($materia as $materia){?>
                                <option class="form-control" value="<?php echo $materia['mat_id']; ?>"> <?php echo ucfirst($materia['mat_nombre']); ?></option>
                                <?php } ?>
                        </select><br>
                    </div>
                </div> 
        </form><br>
        <button id="guardar_mxg" class="btn btn-success ms-5">Guardar materia en grado</button>
    </div>
</div>

<script src="<?php echo base_url();?>js/MateriaxGrado.js"> </script>
