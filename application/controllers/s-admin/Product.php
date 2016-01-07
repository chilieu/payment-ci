<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends Sadmin_Controller
{
	private $layout;
	private $product_type;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
		$res = $this->db->get('type')->result();
		foreach ($res as $row) {
			$this->product_type[ $row->id ] = $row->name;
		}
	}

	public function index()
	{
		$data['product_type'] = $this->product_type;
		$this->viewData['_body'] = $this->load->view( $this->APP . '/product/index-body', array('data' => $data), true);
		$this->render( $this->layout );
	}

	public function edit($product_id)
	{
		if( !$product_id ) header("Location: /s-admin/product/");

		//get product
		$this->load->model('Product_model');
		$product = $this->Product_model->getById( $product_id );

		$data['product'] = $product[0];
		$data['product_type'] = $this->product_type;
		$this->viewData['_body'] = $this->load->view( $this->APP . '/product/add', array('data' => $data), true);
		$this->render( $this->layout );
	}

	public function add()
	{

		$product = array();

		if(count( $this->input->post() ) > 0)
		{
			$product = $this->input->post();

			$this->load->library('form_validation');
			$this->form_validation->set_rules('product[name]', 'Product Name', 'required|trim');
			$this->form_validation->set_rules('product[type_id]', 'Product Type', 'required');
			$this->form_validation->set_rules('product[price]', 'Product Price', 'decimal|required|trim');

			if ($this->form_validation->run() !== FALSE) {

				$this->load->model('Product_model');
				if( isset($product['product']['id']) && $product['product']['id'] > 0 ) {
					//update product
					$this->Product_model->update( $product['product']['id'], $product['product'] );
				} else {
					//insert product
					$this->Product_model->insert( $product['product'] );
				}

				$this->session->set_flashdata('addItem', array("status" => 0, "msg" => "New product has been added"));
				redirect("/s-admin/product/");exit;
			} else {

				$this->session->set_flashdata('addItem', array("status" => 1, "msg" => validation_errors() ));

			}

		}

		$product['product_type'] = $this->product_type;
		$this->viewData['_body'] = $this->load->view( $this->APP . '/product/add', array("data" => $product), true);
		$this->render( $this->layout );
	}

	public function getData()
	{
		$numRows = isset($_GET['iDisplayLength']) ? intval($_GET['iDisplayLength']) : 25;
		$offset = isset($_GET['iDisplayStart']) ? intval($_GET['iDisplayStart']) : 0;
		$sortCol = isset($_GET['iSortCol_0']) ? intval($_GET['iSortCol_0']) : false;
		$sortDir = isset($_GET['sSortDir_0']) && strtolower($_GET['sSortDir_0']) == 'desc' ? 'DESC' : 'ASC';
		$search = isset($_GET['sSearch']) && !empty($_GET['sSearch']) ? preg_replace("/[^a-zA-Z0-9 @]/", "", $_GET['sSearch']) : null;
		$status = isset($_GET['status']) && !empty($_GET['status']) ? $_GET['status'] : null;

		$colArr = array('id', 'name', 'type_id', 'price', 'creation_date');

		$this->db->select('*')
			->from('product');
		if (!empty($search)) {
			$this->db->where("(name LIKE '%$search%' OR price LIKE '%$search%' OR id LIKE '$search%')");
		}
		$totalRows = $this->db->count_all_results();

		$this->db->select('*')
			->from('product')
			->order_by($colArr[$sortCol], $sortDir);

		if (!empty($search)) {
			$this->db->where("(name LIKE '%$search%' OR price LIKE '%$search%' OR id LIKE '$search%')");
		}

		if ($numRows != -1) {
			$this->db->limit($numRows, $offset);
		}

		$rows = $this->db->get()->result();

		$result = array();
		foreach ($rows as $r) {
			$actionStr = '<div class="btn btn-default edit-page-btn" data-id="' . $r->id . '" style="margin-right: 8px;"><i class="fa fa-pencil"></i></div>';
			//$actionStr .= '<div class="btn btn-default delete-page-btn" data-id="' . $r->id . '"><i class="fa fa-eye"></i></div>';

			$result[] = array(
				$r->id,
				$r->name,
				$this->product_type[$r->type_id],
				"$" . $r->price,
				$actionStr
			);
		}

		echo json_encode(array(
			'iTotalRecords' => $totalRows,
			'iTotalDisplayRecords' => $totalRows,
			'aaData' => $result
		));
		return;
	}

}
