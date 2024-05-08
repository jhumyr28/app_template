<?php 

class pdfModel extends CI_Model 
{
    function selectData()
    {
        $query = $this->db->get('payroll');
        return $query->result();
    }

}
