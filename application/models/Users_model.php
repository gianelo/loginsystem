<?php 
	/**
	* Users Model
	*/
	class Users_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		/*
		**	Get All Users Records
		*/
		function get_users(){
			$query = $this->db->get('users');
			return $query->result();
		}

		/*
		**	Get User Record By ID
		*/
		function get_user_by_id($id)
		{
			if ($id!=FALSE) {
				$query = $this->db->get_where('users',array('id_user' => $id ));
				return $query->result();
			}else{
				return FALSE;
			}			
		}

		/*
		**	Insert New User Record
		*/
		function insert_user($data)
		{
			if ($data!=FALSE) {
					$query = $this->db->insert('users',$data);
					return $query;
				} else {
					return FALSE;
				}					
		}

		/*
		**	Update User Record By ID
		*/
		function update_user($id,$data)
		{
			if ($id!=FALSE OR $data!=FALSE) {

				$this->db->where($id);
				$query = $this->db->update('users',$data);
				return $query;

			} else {
				return FALSE;
			}		
			
		}

		/*
		**	Delete User Record By ID
		*/
		function delete_user($id)
		{
			if ($id!=FALSE) {
				$this->db->where($id);
				$query = $this->db->delete('users', array('id_user' =>$id));
				return $query;
			} else {
				return FALSE;
			}		

		}
	}
 ?>