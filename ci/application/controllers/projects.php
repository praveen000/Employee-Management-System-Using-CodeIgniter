<?php 
class Projects extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('no_access','You are not allowed Here');
			redirect('home/index');
		}	
	}

	public function index(){
		$data['projects'] = $this->project_model->get_projects();
		$data['main_view'] = "projects/index";
		$this->load->view('layouts/main',$data);
	}
	public function display($project_id){
		$data['completed_tasks']=$this->project_model->get_project_tasks($project_id,true);
		$data['project_data']=$this->project_model->get_project($project_id);
		$data['main_view'] = "projects/display";
		$this->load->view('layouts/main',$data);
	}

	//Create Post
	public function create(){
		 $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');	
		 $this->form_validation->set_rules('project_body', 'Project Details', 'trim|required');	

		 if($this->form_validation->run() ==FALSE){
		 	$data['main_view'] = 'projects/create_project';
		 	$this->load->view('layouts/main',$data);
		 }else{
		 	$data=array(
         	'project_user_id' => $this->session->userdata('user_id'),
		 	'project_name' => $this->input->post('project_name'),
		 	'project_body' => $this->input->post('project_body')

		 	);

		 	if($this->project_model->create_project($data)){
		 		$this->session->set_flashdata('project_created','Your Project Has Been Created');
		 		redirect("projects/index");
		 	}

    	 }
	}

	//Edit Single Post 
		public function edit($project_id){
			 $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');	
			 $this->form_validation->set_rules('project_body', 'Project Details', 'trim|required');	
			 if($this->form_validation->run() ==FALSE){			 	
			 	$data['project_data'] = $this->project_model->get_projects_info($project_id);
			 	$data['main_view'] = 'projects/edit_project';
			 	$this->load->view('layouts/main',$data);
			 }else{
			 	$data=array(
	         	'project_user_id' => $this->session->userdata('user_id'),
			 	'project_name' => $this->input->post('project_name'),
			 	'project_body' => $this->input->post('project_body')
			 	);
			 	if($this->project_model->edit_project($project_id,$data)){

			 		$this->session->set_flashdata('project_updated','Your Project Has Been Updated');
			 		redirect("projects/index");
			 	}
	    	 }

		}
		//Delete Project 

		public function delete($project_id){

			$this->project_model->delete_project($project_id);
			$this->session->set_flashdata('project_deleted','Your Project Has Been Deleted');
			redirect("projects/index");

		}

}