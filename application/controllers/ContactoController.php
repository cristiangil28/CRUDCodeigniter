<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactoController extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('ContactoModel');
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
			$datos=$this->input->post();
			$id=$this->input->post('id');
			if($this->ContactoModel->updateContacto($id,$datos)){
				header('Location:'.base_url().'ContactoController');
				
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