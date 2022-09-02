<?php
Class grados_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function setGrd($data)/* guardar grado */
    {
        $this->db->insert('grd_grado', $data);
    }

    public function showGrd()/* mostrar grado */
    {
        $grd = $this->db->select('*')->from('grd_grado')->get();
       
        if($grd->num_rows()>0){
            return $grd->result();
        }else{
            return FALSE;
        }
    }
 
}

?>