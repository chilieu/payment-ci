<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer extends Sadmin_Controller
{
	private $layout;
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layout';
	}

	public function index()
	{
		$this->viewData['_body'] = $this->load->view( $this->APP . '/customer/index-body', array(), true);
		$this->render( $this->layout );
	}

	public function edit($customer_id)
	{
		if( !$customer_id ) header("Location: /s-admin/customer/");

		//get customer
		$this->load->model('Customer_model');
		$customer = $this->Customer_model->getById( $customer_id );

		$data['customer'] = $customer[0];
		$this->viewData['_body'] = $this->load->view( $this->APP . '/customer/add', array('data' => $data), true);
		$this->render( $this->layout );
	}

	public function add()
	{

		$customer = array();

		if(count( $this->input->post() ) > 0)
		{
			$customer = $this->input->post();

			$this->load->library('form_validation');
			$this->form_validation->set_rules('customer[first_name]', 'First Name', 'required|trim');
			$this->form_validation->set_rules('customer[last_name]', 'Last Name', 'required|trim');
			$this->form_validation->set_rules('customer[email]', 'Email', 'trim|required|valid_email');

			if ($this->form_validation->run() !== FALSE) {

				$this->load->model('Customer_model');
				if( isset($customer['customer']['id']) && $customer['customer']['id'] > 0 ) {
					//print_r($customer['customer']);exit;
					//update customer
					$this->Customer_model->update( $customer['customer']['id'], $customer['customer'] );
					$this->session->set_flashdata('addItem', array("status" => 0, "msg" => "Customer has been updated"));
				} else {
					//insert customer
					$this->Customer_model->insert( $customer['customer'] );
					$this->session->set_flashdata('addItem', array("status" => 0, "msg" => "New customer has been added"));
				}
				redirect("/s-admin/customer/");exit;
			} else {

				$this->session->set_flashdata('addItem', array("status" => 1, "msg" => validation_errors() ));

			}

		}

		$this->viewData['_body'] = $this->load->view( $this->APP . '/customer/add', array("data" => $customer), true);
		$this->render( $this->layout );
	}

	public function dashboard()
	{

		$this->viewData['_body'] = $this->load->view( $this->APP . '/dashboard/index', array(), true);
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

		$colArr = array('id', 'first_name', 'last_name', 'email', 'phone1', 'phone2', 'creation_date');

		$this->db->select('*')
			->from('customer');
		if (!empty($search)) {
			$this->db->where("(first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR phone1 LIKE '%$search%' OR phone2 LIKE '%$search%' OR id LIKE '$search%')");
		}
		$totalRows = $this->db->count_all_results();

		$this->db->select('*')
			->from('customer')
			->order_by($colArr[$sortCol], $sortDir);

		if (!empty($search)) {
			$this->db->where("(first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR phone1 LIKE '%$search%' OR phone2 LIKE '%$search%' OR id LIKE '$search%')");
		}

		if ($numRows != -1) {
			$this->db->limit($numRows, $offset);
		}

		$rows = $this->db->get()->result();

		$result = array();
		foreach ($rows as $r) {
			$actionStr = '<div class="btn btn-default edit-page-btn" data-id="' . $r->id . '" style="margin-right: 8px;"><i class="fa fa-pencil"></i></div>';
			$actionStr .= '<div class="btn btn-default delete-page-btn" data-id="' . $r->id . '"><i class="fa fa-eye"></i></div>';

			$result[] = array(
				$r->id,
				$r->first_name . " " . $r->last_name,
				$r->email,
				$r->phone1 . " | " . $r->phone2,
				$r->creation_date,
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
