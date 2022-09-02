<center><h1>Registrar Alumno</h1></center>
<div class="container">
    <div class="form-control">
        <form id='form'>
            <center><label  for="codigo">Codigo del Alumno</label></center>
            <div class="d-flex my-3 mx-3 ms-4">
                <input type="hidden" value="<?=base_url()?>" id="base_url">
                <input type="text" id="codigo" class="form-control" placeholder="Codigo">
            </div>
            
            <div class="d-flex m-3">
                <div class="form-control mx-2">
                    <center><label for="Name">Nombre</label></center>
                    <input type="text" id="nombre" class="form-control" placeholder="Nombre del Alumno"><br>
                </div>
                
                <div class="form-control">
                    <center><label class="form-label" for="edad">Edad</label></center>
                    <input type="text" id="edad" class="form-control" placeholder="Edad del Almuno"><br>
                </div>
            </div>

            <div class="d-flex m-3">
                <div class="form-control mx-2">
                    <center><label  for="sexo">Sexo</label></center>
                    <select class="form-control" name="text" id="sexo">
                        <option value="">Selecione...</option>
                    <?php foreach($dataS as $dataS){?> 
                        <option class="form-control" value="<?php echo $dataS['sexo_id']; ?>"> <?php echo ucfirst($dataS['sexo_nombre']); ?></option>
                    <?php } ?>
                    </select>
                </div>

                <div class="form-control">
                    <center><label  for="grado">Grado</label></center>
                    <select class="form-control" name="text" id="grado">
                        <option class="form-control" value="">Selecione...</option>
                    <?php foreach($query as $query){?>
                        <option class="form-control" value="<?php echo $query['grd_id']; ?>"> <?php echo ucfirst($query['grd_nombre']); ?></option>
                    
                    <?php } ?>
                    </select><br>
                </div>
            </div>
            <div class="d-flex m-3">
                <div class="form-control ms-2 p-4">
                        <center><label for="descripcion">Descripcion del Alumno</label></center>
                        <input type="text" id='descripcion' class="form-control">
                </div>
            </div>
        </form>
        <button id="guardar_datos" class="btn btn-success m-3 px-5 py-3">Guardar Datos</button>
    </div><br>
</div>
<script src="<?php echo base_url();?>js/RegistrarAlm.js"></script>