<?php 

class PayrollModel extends CI_Model 
{
    public function getpdf($data) {
        $payroll = [
            'adviser'       => $data['adviser'],
            'date'          => $data['date'],
            'period'        => $data['period'],
            'clients'       => $data['clients'],
            'bonuses'       => $data['bonuses'],
        ];

        $this->db->insert('payroll', $payroll);


    }




}