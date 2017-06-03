<?php

class M_ci extends Model {
	
	function M_ci() {
		parent::Model();
	}
	//��ʾ����
	function get(){
		return $this->db->get('ci');
	}
	function get_limit($num, $offset){
		$this->db->limit($num, $offset);
		$this->db->order_by("id", "desc"); 
		return $this->db->get('ci');
	}
	//��¼��֤
	function login() {
		$username=$this->input->post('username', TRUE);
		$password=md5($this->input->post('password', TRUE));
		$query=$this->db->query("select * from admin where username = '$username' and password = '$password'");
		return $query->row_array();	//���ص�ǰ���������
    }
    
    //用户注册数据库插入方法֤
    function zhuce($username,$password) {
    	//$username=$this->input->post('username', TRUE);
    	//$password=md5($this->input->post('password', TRUE));
    	$password1 = md5($password);
    	$id = rand(0,99999);
    	//$query=$this->db->query("select * from admin where username = '$username' and password = '$password'");
    	return  $query=$this->db->query("insert into admin (id,username,password) VALUES ($id,'$username','$password1')");
    	
    }
    
   
    
    
	//�˳���¼
	function login_out(){
		$this->session->unset_userdata('username');
	}
	//��������
	function into(){
		$username=$this->input->post('username', TRUE);
		$picture=$this->input->post('picture', TRUE);
		$title=$this->input->post('title', TRUE);
		$times=date('Y-m-d H:i:s');
		$content=$this->input->post('content', TRUE);
		$data = array(
					  'username' => $username ,
					  'picture' => $picture ,
					  'title' => $title ,
					  'times' => $times ,
					  'content' => $content ,
					  );
		$this->db->insert('ci', $data); 
	}
	//ɾ������
	function delete($id){
		$this->db->delete('ci', array('id' => $id)); 
	}
	//��������
	function update($id){
		return $this->db->get_where('ci', array('id' => $id));
	}
	function update_ok($id){
		$username=$this->input->post('username', TRUE);
		$picture=$this->input->post('picture', TRUE);
		$title=$this->input->post('title', TRUE);
		$times=date('Y-m-d H:i:s');
		$content=$this->input->post('content', TRUE);
		$data = array(
					  'username' => $username ,
					  'picture' => $picture ,
					  'title' => $title ,
					  'times' => $times ,
					  'content' => $content ,
					  );
		
		$this->db->where('id', $id);
		$this->db->update('ci', $data); 
	}
}

?>