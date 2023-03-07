<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Campaigns extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('campaigns_model');
		$user_id = $this->session->userdata('user_id');
		if (empty($user_id)) {
			redirect('');
		}
	}

	public function index(){
		$data['query'] = $this->campaigns_model->view_data('campaigns');
		$data['view'] = 'campaigns/list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Campaigns List';
		$data['breadcrumb'] = 'Campaigns List';
		$data['scripts'] = array('assets/javascripts/campaigns.js');
		$this->load->view('templates/dashboard', $data);
	}

    public function campaigns_list(){
      
            $draw = $this->input->post('draw');
            $start = $this->input->post('start');
            $length = $this->input->post('length');
            $sevas = $this->campaigns_model-> pagination('campaigns');
            $data = array();
    
            foreach ($sevas->result() as $row) {
                $status = (!empty($row->status_ind) && ($row->status_ind == 1)) ? "<i class='fa fa-check-circle text-success'>Active</i> &nbsp;&nbsp;" : "<i class='nav-icon fa  fa-times-circle text-danger' >Inactive</i>";
                $data[] = array(
                    $row->title,
                    $row->page_slug,
                    // $row->seva_category_id,
                    $row->created_date,
                    $row->modified_date,
                    $status,
                    '
                    <td><div class="action-buttons">
                    <a class="" title="Edit" href="campaigns/campaign_edit/' . $row->campaign_id . '">
                    <button class="btn btn-primary btn-small btn-xs"><i class="fa fa-edit"></i></button></a>&nbsp;
                    <a class="red" title="Delete" href="campaigns/campaign_delete/' . $row->campaign_id . '"> 
                    <button class="btn btn-danger btn-small btn-xs"><i class="fa fa-trash"></i></button></a>&nbsp;
                    </div></td>
                    '
    
                );
          
    
    }
    $output = array(
        "draw" => $draw,
        "recordsTotal" => $sevas->num_rows(),
        "recordsFiltered" => $sevas->num_rows(),
        "data" => $data

    );
    echo json_encode($output);
    exit;

}
public function add_campaign(){
  
    $data['page_type'] = $this->campaigns_model->page_type();
    $data['templates'] = $this->campaigns_model->view_data('templates');
    $data['view'] = 'campaigns/form';
    $data['title'] = 'Administrator Dashboard';
    $data['page_heading'] = 'Campaign Form';
    $data['breadcrumb'] = 'Campaign Form';
    $data['scripts'] = array('assets/javascripts/campaigns.js');
    $this->load->view('templates/dashboard', $data);
}
public function campaign_edit($campaign_id){
    
    // $data['seva_categories'] = $this->campaigns_model->view_data('seva_category');
  
    $this->campaigns_model->primary_key = array('campaign_id'=>$campaign_id);
    $seva_page = $this->campaigns_model->get_row('campaigns');
    // $seva_page->seva_category_id = explode(',',$seva_page->seva_category_id);
    $data['query'] = $seva_page;
    $data['page_type'] = $this->campaigns_model->page_type();
    $data['templates'] = $this->campaigns_model->view_data('templates');
    $data['view'] = 'campaigns/form';
    $data['title'] = 'Administrator Dashboard';
    $data['page_heading'] = 'Campaign Form';
    $data['breadcrumb'] = 'Campaigns Form';
    $data['scripts'] = array('assets/javascripts/campaigns.js');
    $this->load->view('templates/dashboard', $data);
}


public function campaign_save()
{

  
   //  $this->campaigns_model->create_seva_table($this->input->post('page_slug'));
    $campaign_id = $this->input->post('campaign_id');
    $this->campaigns_model->data = $this->input->post();
   // $this->campaigns_model->data['seva_category_id'] = implode(',',$this->input->post('seva_category_id'));

    // Image Upload Code Begins Here
    $this->banner = array('upload_path' => CAMPAIGN_BANNER_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
    $this->upload->initialize($this->banner);
   
    if (!empty($_FILES['banner']['name']) && $this->upload->do_upload('banner')) {
        $upload_data = $this->upload->data();
        $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
        $gen_filename = "banner" . rand(1000000, 9999999) . "." . $file_Ext;
        rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
        $this->campaigns_model->data['banner'] = $gen_filename;
        // $this->createthumbs(array($upload_data['file_name']));
    } else {
    
        $data['form_error']['banner'] = $this->upload->display_errors();
    }
    $this->banner_image = array('upload_path' => CAMPAIGN_BANNER_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
    $this->upload->initialize($this->banner_image);
   
    if (!empty($_FILES['banner_image']['name']) && $this->upload->do_upload('banner_image')) {
        $upload_data = $this->upload->data();
        $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
        $gen_filename = "banner_image" . rand(1000000, 9999999) . "." . $file_Ext;
        rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
        $this->campaigns_model->data['banner_image'] = $gen_filename;
        // $this->createthumbs(array($upload_data['file_name']));
    } else {
    
        $data['form_error']['banner'] = $this->upload->display_errors();
    }
   
    //Image Upload Code end here
    if (!empty($campaign_id)) {
        $this->campaigns_model->data['modified_date'] = date('Y-m-d h:i:s');
        $this->campaigns_model->data['modified_by'] = $this->session->userdata('user_id');
        $this->campaigns_model->primary_key = array('campaign_id' => $campaign_id);
        if ($r = $this->campaigns_model->update('campaigns')) {
            
            $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Updated Successfully');
           } else {
               $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Update Record.');
           }
       } else {
       
           unset($this->campaigns_model->data['campaign_id']);
           $this->campaigns_model->data['created_date'] = date('Y-m-d');
           $this->campaigns_model->data['created_by'] = $this->session->userdata('user_id');
           $this->campaigns_model->data['modified_date'] = date('Y-m-d h:i:s');
           $this->campaigns_model->data['modified_by'] = $this->session->userdata('user_id');
          
        if ($this->campaigns_model->insert('campaigns')) {
           
            $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Added Successfully');
        } else {
           
            $data['query'] = (object) $this->input->post();
            $data['view'] = "campaigns/form";
            $data['title'] = 'Administrator Dashboard';
            $data['page_heading'] = 'Add/Edit Charitable Program Page';
            $data['breadcrumb'] = "Add/Edit Charitable Program Page";
            $data['scripts'] = array('assets/javascripts/' . 'campaigns.js');
            $this->load->view('templates/dashboard', $data);
            $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Add Record.');
        }
    }

    $this->session->set_flashdata('msg', $msg);
    redirect("campaigns");
}

public function campaign_delete($campaign_id){
     $this->campaigns_model->primary_key = array('campaign_id' => $campaign_id);
     $q = $this->campaigns_model->delete('campaigns');
     if($q){
          $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Deleted Successfully');
     }else{
          $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Delete Record.');
     }
      $this->session->set_flashdata('msg', $msg);
    redirect("campaigns");
}


public function approve_campaign(){
        
		$data['view'] = 'campaigns/approval_list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Campaign Approval List';
		$data['breadcrumb'] = 'Campaign Approval List';
		$data['scripts'] = array('assets/javascripts/campaigns.js');
		$this->load->view('templates/dashboard', $data);
}

public function approval_campaigns_list(){
      
    $draw = $this->input->post('draw');
    $start = $this->input->post('start');
    $length = $this->input->post('length');
    $this->campaigns_model->primary_key = array('approval_status <'=>2);
    $campaigns = $this->campaigns_model->pagination('campaigns');
    $data = array();
    foreach ($campaigns->result() as $row) {
        
        $status = ($row->approval_status == 0) ? "<i class='fa fa-check-circle text-danger'>Rejected</i> &nbsp;&nbsp;" : "<i class='nav-icon fa  fa-times-circle text-warning' >Under Review</i>";
        $data[] = array(
            $row->title,
            $row->page_slug,
            // $row->seva_category_id,
            $row->created_date,
            $row->modified_date,
            $status,
            '
            <td><div class="action-buttons">
            <a class="" title="Edit" href="campaigns/approve_campaign_edit/' . $row->campaign_id . '">
            <button class="btn btn-primary btn-small btn-xs"><i class="fa fa-edit"></i></button></a>&nbsp;
           
            </div></td>
            '

        );
  

}
$output = array(
"draw" => $draw,
"recordsTotal" => $campaigns->num_rows(),
"recordsFiltered" => $campaigns->num_rows(),
"data" => $data

);
echo json_encode($output);
exit;

}


public function approve_campaign_edit($campaign_id){
    $this->campaigns_model->primary_key = array('campaign_id'=>$campaign_id);
    $data['campaign'] = $this->campaigns_model->get_row('campaigns');
    $this->campaigns_model->primary_key = array('campaign_id'=>$campaign_id);
    $data['comments'] = $this->campaigns_model->view_data('campaign_approval_comments');
    $data['campaign_id'] = $campaign_id;
    $data['view'] = 'campaigns/campaign_approval_form';
    $data['title'] = 'Administrator Dashboard';
    $data['page_heading'] = 'Campaign Approval Form';
    $data['breadcrumb'] = 'Campaign Approval Form';
    $data['scripts'] = array('assets/javascripts/campaigns.js');
    $this->load->view('templates/dashboard', $data);
}

public function campaign_approval_save(){
    $campaign_id = $this->input->post('campaign_id');
    $comments = $this->input->post('comments');
    $approval_status = $this->input->post('approval_status');
    $added_by = $this->session->userdata('user_id');
    $this->campaigns_model->data['campaign_id']= $campaign_id;
    $this->campaigns_model->data['comments']= $comments;
    $this->campaigns_model->data['added_by']= $added_by;
    $this->campaigns_model->insert('campaign_approval_comments');
    print_r($this->db->last_query());
    $this->campaigns_model->data['approval_status'] = $approval_status;
    $this->campaigns_model->primary_key = array('campaign_id'=>$campaign_id);
    $this->campaigns_model->update('campaigns');
    redirect('campaigns/approve_campaign');

}
}