<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {

	var $table;

    function __construct()
    {
        parent::__construct();
        $this->table = "customer";
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, array(
            'id' => $id
        ))->result_array();
    }

    public function getByName()
    {

    }

    public function getByPhone()
    {

    }

    public function getTop10()
    {
    	return $this->getLimit(10, 0);
    }

    public function getAll()
    {
		return $this->db->get( $this->table )->result();
    }

    public function getLimit( $limit=100, $offset=50 )
    {
		return $this->db->get( $this->table, $offset, $limit )->result();
    }

    public function total()
    {
		return $this->db->count_all( $this->table )->result();
    }

    public function insert($data)
    {
    	return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function remove()
    {

    }

    public function maxID()
    {
		$this->db->select_max('id');
		return $this->db->get( $this->table )->result();
    }

}
