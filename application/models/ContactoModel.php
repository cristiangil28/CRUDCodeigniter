<?php
//evita que pueda ser llamado directamente
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ContactoModel extends CI_Model{
		
		function __construct(){
			
			parent::__construct();
		}
		public function getAll(){
			
			return $this->db->query('select * from contactos')->result();
		}
		public function setContacto($datos)
		{
			
			 return $this->db->insert('contactos',$datos);
			 
			
		}
		public function getContacto($id){
			$query=$this->db->where('id',$id);
			$query=$this->db->get('contactos');
        	return $query->result();
		}
		
		public function updateContacto($id,$datos){
			$this->db->where('id',$id);
			return $this->db->update('contactos',$datos);
		}
		
		public function eliminarContacto($id){
			$this->db->where('id',$id);
			return $this->db->delete('contactos');
		}
	}
?>