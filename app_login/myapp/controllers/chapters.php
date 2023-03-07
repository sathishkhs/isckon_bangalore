<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Chapters extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('chapters_model');
		$user_id = $this->session->userdata('user_id');
		if (empty($user_id)) {
			redirect('');
		}
	}

	public function index(){
		$data['query'] = $this->chapters_model->view_data('chapters');
		$data['view'] = 'chapters/list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'chapters List';
		$data['breadcrumb'] = 'chapters List';
		$data['scripts'] = array('assets/javascripts/chapters.js');
		$this->load->view('templates/dashboard', $data);
	}

    public function chapters_list(){
      
            $draw = $this->input->post('draw');
            $start = $this->input->post('start');
            $length = $this->input->post('length');
            $sevas = $this->chapters_model-> pagination('chapters');
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
                    <a class="" title="Edit" href="chapters/chapter_edit/' . $row->chapter_id . '">
                    <button class="btn btn-primary btn-small btn-xs"><i class="fa fa-edit"></i></button></a>&nbsp;
                    <a class="red" title="Delete" href="chapters/chapter_delete/' . $row->chapter_id . '"> 
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
public function add_chapter(){
  
    $data['page_type'] = $this->chapters_model->page_type();
    $data['templates'] = $this->chapters_model->view_data('templates');
    $data['view'] = 'chapters/form';
    $data['title'] = 'Administrator Dashboard';
    $data['page_heading'] = 'Chapter Form';
    $data['breadcrumb'] = 'Chapter Form';
    $data['scripts'] = array('assets/javascripts/chapters.js');
    $this->load->view('templates/dashboard', $data);
}
public function chapter_edit($chapter_id){
    
    // $data['seva_categories'] = $this->chapters_model->view_data('seva_category');
  
    $this->chapters_model->primary_key = array('chapter_id'=>$chapter_id);
    $seva_page = $this->chapters_model->get_row('chapters');
    // $seva_page->seva_category_id = explode(',',$seva_page->seva_category_id);
    $data['query'] = $seva_page;
    $data['page_type'] = $this->chapters_model->page_type();
    $data['templates'] = $this->chapters_model->view_data('templates');
    $data['view'] = 'chapters/form';
    $data['title'] = 'Administrator Dashboard';
    $data['page_heading'] = 'Chapter Form';
    $data['breadcrumb'] = 'chapters Form';
    $data['scripts'] = array('assets/javascripts/chapters.js');
    $this->load->view('templates/dashboard', $data);
}


public function chapter_save()
{

  
   //  $this->chapters_model->create_seva_table($this->input->post('page_slug'));
    $chapter_id = $this->input->post('chapter_id');
    $this->chapters_model->data = $this->input->post();
   // $this->chapters_model->data['seva_category_id'] = implode(',',$this->input->post('seva_category_id'));

    // Image Upload Code Begins Here
    $this->banner = array('upload_path' => CHAPTER_BANNER_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
    $this->upload->initialize($this->banner);
   
    if (!empty($_FILES['banner']['name']) && $this->upload->do_upload('banner')) {
        $upload_data = $this->upload->data();
        $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
        $gen_filename = "banner" . rand(1000000, 9999999) . "." . $file_Ext;
        rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
        $this->chapters_model->data['banner'] = $gen_filename;
        // $this->createthumbs(array($upload_data['file_name']));
    } else {
    
        $data['form_error']['banner'] = $this->upload->display_errors();
    }
    $this->banner_image = array('upload_path' => CHAPTER_BANNER_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
    $this->upload->initialize($this->banner_image);
   
    if (!empty($_FILES['banner_image']['name']) && $this->upload->do_upload('banner_image')) {
        $upload_data = $this->upload->data();
        $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
        $gen_filename = "banner_image" . rand(1000000, 9999999) . "." . $file_Ext;
        rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
        $this->chapters_model->data['banner_image'] = $gen_filename;
        // $this->createthumbs(array($upload_data['file_name']));
    } else {
    
        $data['form_error']['banner'] = $this->upload->display_errors();
    }
   
    //Image Upload Code end here
    if (!empty($chapter_id)) {
        $this->chapters_model->data['modified_date'] = date('Y-m-d h:i:s');
        $this->chapters_model->data['modified_by'] = $this->session->userdata('user_id');
        $this->chapters_model->primary_key = array('chapter_id' => $chapter_id);
        if ($r = $this->chapters_model->update('chapters')) {
            
            $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Updated Successfully');
           } else {
               $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Update Record.');
           }
       } else {
       
           unset($this->chapters_model->data['chapter_id']);
           $this->chapters_model->data['created_date'] = date('Y-m-d');
           $this->chapters_model->data['created_by'] = $this->session->userdata('user_id');
           $this->chapters_model->data['modified_date'] = date('Y-m-d h:i:s');
           $this->chapters_model->data['modified_by'] = $this->session->userdata('user_id');
          
        if ($this->chapters_model->insert('chapters')) {
           
            $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Added Successfully');
        } else {
           
            $data['query'] = (object) $this->input->post();
            $data['view'] = "chapters/form";
            $data['title'] = 'Administrator Dashboard';
            $data['page_heading'] = 'Add/Edit Charitable Program Page';
            $data['breadcrumb'] = "Add/Edit Charitable Program Page";
            $data['scripts'] = array('assets/javascripts/' . 'chapters.js');
            $this->load->view('templates/dashboard', $data);
            $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Add Record.');
        }
    }

    $this->session->set_flashdata('msg', $msg);
    redirect("chapters");
}
}