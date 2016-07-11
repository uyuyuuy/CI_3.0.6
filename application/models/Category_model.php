<?php

class Category_model extends CI_Model {

	public function get_list()
	{
		return $category = $this->db->get('category')->result_array();
	}
}
