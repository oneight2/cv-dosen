<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Autocomplete_model extends CI_Model
{
    public function fetch_data($query)
    {
    	$this->db->like('nama', $query);
    	// $this->db->like('nidn', $query);
    	$join="SELECT * FROM `dosen` JOIN `user` ON `dosen`.`nidn`=`user`.`nidn`
                ";
    	$query = $this->db->query($join);
    	if ($query->num_rows()>0) {
    		foreach($query->result_array() as $row)
    		{
    			$output[] = array(
    				'name' => $row["nama"],
    				'nidn' => $row["nidn"],
    				'image' => $row["image"]
    			);
    		}
    		echo json_encode($output);
    	}
    }
}
