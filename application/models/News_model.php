<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function getData($limit, $start)
	{
		$query = $this->db->get('posts', $limit, $start);
		
		return $query;
	}

}

/* End of file News_model.php */
