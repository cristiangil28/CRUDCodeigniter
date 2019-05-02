<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactoController extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('ContactoModel'); 
		
	}
	public function reglasValidacion(){
            /*se crean las reglas de validación*/
            $this->form_validation->set_rules('email', 'Email', 'required|
            valid_email');
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|
            min_length[3]');
            $this->form_validation->set_rules('edad', 'Edad', 'required|
            integer');
            $this->form_validation->set_rules('telefono', 'Teléfono', 'trim');
	}
	//para volver privado un método le enteponemos al nombre un _
	public function index(){
		
		$contactos['contacto']=$this->ContactoModel->getAll();
		$this->load->view('view_contactos',$contactos);
	}
	public function saveContacto(){
		
		if($this->input->post()){
			
				$datos=$this->input->post();
			if($this->ContactoModel->setContacto($datos)){
				
				header('Location:'.base_url().'ContactoController');
			}else{
				echo('no se cargaron');
			}
			
			}else{
				print_r($this->form_validation->run());
				echo 'error de validación';	
		}
	}
	public function modificarContacto($id=null){
		if(!$id==null){
			$dato['modificarContacto']=$this->ContactoModel->getContacto($id);
			$this->load->view('modificar_contacto',$dato);
		}else{
			header('Location:'.base_url().'ContactoController');
		}
		
	}
	public function updateContacto(){
		if($this->input->post()){
			if($this->form_validation->run()){
			$this->reglasValidacion();
			$datos=$this->input->post();
			$id=$this->input->post('id');
			if($this->ContactoModel->updateContacto($id,$datos)){
				header('Location:'.base_url().'ContactoController');
				
			}
			
		}
	}
	}
	public function eliminarContacto($id){
		
			if($this->ContactoModel->eliminarContacto($id)){
				
				header('Location:'.base_url().'ContactoController');
			}
		
	}
	
}
?>