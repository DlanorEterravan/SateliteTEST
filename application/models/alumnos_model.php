<?php
Class alumnos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function setAlm($data){
        $this->db->insert('alm_alumno', $data);
    }

    public function getAllAlm()
    {
        $this->db->select('alm_codigo, alm_nombre, alm_edad, alm_observacion, sexo_nombre, grd_nombre, group_concat(distinct mat_nombre separator " ,") as mxg')
                    ->from('alm_alumno')
                    ->join('grd_grado', 'grd_grado.grd_id = alm_alumno.alm_id_grd')
                    ->join('mxg_materiaxgrado', 'mxg_materiaxgrado.mxg_id_grd = grd_grado.grd_id')
                    ->join('mat_materia', 'mat_materia.mat_id = mxg_materiaxgrado.mxg_id_mat')
                    ->join('sexo_alm', 'sexo_alm.sexo_id = alm_alumno.alm_sexo_fk')
                    /* ->order_by('grd_grado.grd_id', 'ASC') */
                    ->group_by('alm_alumno.alm_id');
        $query = $this->db->get();

        return $query->result_array();
    }
    

}

?>