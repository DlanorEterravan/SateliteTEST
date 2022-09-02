<?php
Class sexo_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function showSexo(){
        $sexo = $this->db->select('*')->from('sexo_alm')->get();
        if($sexo->num_rows()>0){
            return $sexo->result();
        }else{
            return null;
        }
    }
}

?>