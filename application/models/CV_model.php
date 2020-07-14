<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class CV_model extends CI_Model
{
    public function getDosen()
    {
        $nidn = $this->input->post_get('nidn', TRUE);
        
    	$query = "SELECT * FROM `dosen` JOIN `user` ON `dosen`.`nidn`=`user`.`nidn`
                WHERE `dosen`.`nidn` = $nidn";
        return $this->db->query($query)->row_array();
    }
}
