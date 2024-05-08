<?php 

class profileModel extends CI_Model 
{
    public function getprofile($data) {
        $profile = [
            'name'          => $data['name'],
            'type'          => $data['type'],
            'commission'    => $data['commission'],
            'tax'           => $data['tax'],
            'bonuses'       => $data['bonuses'],
        ];

        $this->db->insert('profile', $profile);


    }
}