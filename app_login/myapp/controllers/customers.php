<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Customers extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('customers_model');
		$user_id = $this->session->userdata('user_id');
		if (empty($user_id)) {
			redirect('');
		}
	}

	public function index(){
		$data['query'] = $this->customers_model->view_data('customers');
		$data['view'] = 'customers/list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Customers List';
		$data['breadcrumb'] = 'Customers List';
		$data['scripts'] = array('assets/javascripts/customers.js');
		$this->load->view('templates/dashboard', $data);
	}
    public function approve_customer(){
        // $this->customers_model->primary_key = array('customer_id'=>$customer_id,'approval_status <'=>2);
        // $approval_customers = $this->customers_model->get_row('customers');
		$data['view'] = 'customers/approval_list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Customer Approval List';
		$data['breadcrumb'] = 'Customer Approval List';
		$data['scripts'] = array('assets/javascripts/customers.js');
		$this->load->view('templates/dashboard', $data);
    }

    public function approval_customers_list(){
        
        $draw = $this->input->post('draw');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $this->customers_model->primary_key = array('account_active_status <'=>2);
        $customers = $this->customers_model->pagination('customers');
        $data = array();
        foreach ($customers->result() as $row) {
            
            $status = ($row->account_active_status == 0) ? "<i class='fa fa-check-circle text-danger'>Rejected</i> &nbsp;&nbsp;" : "<i class='nav-icon fa  fa-times-circle text-warning' >Under Review</i>";
            $data[] = array(
                $row->full_name,
                $row->mobile_number,
                // $row->seva_category_id,
                $row->created_date,
                $status,
                '
                <td><div class="action-buttons">
                <a class="" title="Edit" href="customers/approve_customer_edit/' . $row->customer_id . '">
                <button class="btn btn-primary btn-small btn-xs"><i class="fa fa-edit"></i></button></a>&nbsp;
            
                </div></td>
                '

            );
    

    }
    $output = array(
    "draw" => $draw,
    "recordsTotal" => $customers->num_rows(),
    "recordsFiltered" => $customers->num_rows(),
    "data" => $data

    );
    echo json_encode($output);
    exit;

    }


    public function approve_customer_edit($customer_id){
        $this->customers_model->primary_key = array('customer_id'=>$customer_id);
        $data['customer'] = $this->customers_model->get_row('customers');
        $this->customers_model->primary_key = array('customer_id'=>$customer_id);
        $data['comments'] = $this->customers_model->view_data('customer_approval_comments');
        $data['customer_id'] = $customer_id;
        $data['view'] = 'customers/customer_approval_form';
        $data['title'] = 'Administrator Dashboard';
        $data['page_heading'] = 'Customer Approval Form';
        $data['breadcrumb'] = 'Customer Approval Form';
        $data['scripts'] = array('assets/javascripts/customers.js');
        $this->load->view('templates/dashboard', $data);
    }

    public function customer_approval_save(){
        $customer_id = $this->input->post('customer_id');
        $comments = $this->input->post('comments');
        $account_active_status = $this->input->post('account_active_status');
        $added_by = $this->session->userdata('user_id');
        $this->customers_model->data['customer_id']= $customer_id;
        $this->customers_model->data['comments']= $comments;
        $this->customers_model->data['added_by']= $added_by;
        $this->customers_model->insert('customer_approval_comments');
        $this->customers_model->data['account_active_status'] = $account_active_status;
        $this->customers_model->primary_key = array('customer_id'=>$customer_id);
        $this->customers_model->update('customers');
        redirect('customers/approve_customer');
    
    }
}