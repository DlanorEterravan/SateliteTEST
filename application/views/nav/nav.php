<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 px-5">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link mx-2" href="<?=base_url()?>">Registrar Alumno</a>
        <a class="nav-item nav-link mx-2" href="<?=base_url('alm_controller/getAlm')?>">Obtener Alumno</a>
        <a class="nav-item nav-link mx-2" href="<?=base_url('grd_controller/')?>">Registrar Grado</a>
        <a class="nav-item nav-link mx-2" href="<?=base_url('mat_controller')?>">Registrar Materia x Grado</a>
        <a class="nav-item nav-link mx-2" href="<?= base_url('grd_controller/getGrd')?>">Obtener Grado</a>
    </div>
  </div>
</nav>