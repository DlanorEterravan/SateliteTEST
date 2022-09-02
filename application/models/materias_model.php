<?php 
Class Materias_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function showMat(){
        $mat = $this->db->select('*')->from('mat_materia')->get();

        if($mat->num_rows()>0){
            return $mat->result();
        }else{
            return FALSE;
        }
    }

    public function setMatxGrd($data)
    {
        $this->db->insert('mxg_materiaxgrado', $data);
    }
}
?>