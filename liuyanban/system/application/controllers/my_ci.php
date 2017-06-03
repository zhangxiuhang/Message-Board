<?php

class My_ci extends Controller {

	function My_ci() {
		parent::Controller();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		date_default_timezone_set('Asia/Shanghai');
	}
	
	//��ҳ �����б�
	function index() {
		
		$this->load->model('m_ci');
		$rows=$this->m_ci->get();
		
		$config['base_url']=$this->config->item('base_url')."index.php/my_ci/index/";	
		$config['total_rows'] = $rows->num_rows();
		$config['per_page'] = '4';
		$this->pagination->initialize($config); 
		
		
		$data['base']=$this->config->item('base_url')."index.php/my_ci/";	//��Ŀ¼
		$data['insert']=$data['base']."insert/";	//���ҳ��
		
		$data['register']=$data['base']."register/";//用户注册
		
		$data['login']=$data['base']."login/";	//��¼ҳ��
		$data['login_out']=$data['base']."login_out/";	//��¼��֤
		$data['delete']=$data['base']."delete/";	//ɾ��ҳ��
		$data['update']=$data['base']."update/";	//�޸�ҳ��
		$data['picture']=$this->config->item('img_url');	//img·��		
		$data['username'] = $this->session->userdata('username');	//��¼����
		$data['js']=$this->config->item('js_url');//js·��
		
		$this->load->model('m_ci');
		$data['ci_get']=$this->m_ci->get_limit($config['per_page'],$this->uri->segment(3));
		$data['links']=$this->pagination->create_links();
		$this->load->view('v_ci', $data);
		
	}
	
	
	//��¼ҳ��
	function login() {
		$data['base']=$this->config->item('base_url')."index.php/my_ci/";
		$data['insert']=$data['base']."insert/";
		$data['login']=$data['base']."login/";
		
		$id=$this->uri->segment(3);
		$data['on']=$id;
		$data['js']=$this->config->item('js_url');
		$this->load->view('v_login', $data);
	}
	//用户注册页面
	function register() {
		$data['base']=$this->config->item('base_url')."index.php/my_ci/";
		$data['insert']=$data['base']."insert/";
		$data['login']=$data['base']."login/";
	
		$id=$this->uri->segment(3);
		$data['on']=$id;
		$data['js']=$this->config->item('js_url');
		$this->load->view('v_register', $data);
	}
	
	//用户注册，插入到数据库
	function zhuce_ok() {
		
		$username = $_POST['username'];
		$password = $_POST['password'];	
		$this->load->model('m_ci');
		$rtn=$this->m_ci->zhuce($username,$password);
        //var_dump($rtn);
		if($rtn==true){
			echo "注册成功";return;
		}else{
			echo "注册失败";return;
		}
		
		/* if(empty($login)){
			redirect('my_ci/login/x');
		}else{
			$this->session->set_userdata('username', $login['username']);
			//echo $this->session->userdata('username');
			redirect('my_ci/');
		} */
	}
	
	
	function login_ok() {
		$this->load->model('m_ci');
		$login=$this->m_ci->login();
		if(empty($login)){
			redirect('my_ci/login/x');
		}else{
			$this->session->set_userdata('username', $login['username']);
			//echo $this->session->userdata('username');
			redirect('my_ci/');
		}
	}
	function login_out(){
		$this->load->model('m_ci');
		$login=$this->m_ci->login_out();
		redirect('my_ci/');
	}
	
	//�������ҳ��
	function insert(){
		
		$data['base']=$this->config->item('base_url')."index.php/my_ci/";	//��Ŀ¼
		$data['insert']=$data['base']."insert/";	//���ҳ��
		$data['login']=$data['base']."login/";	//��¼ҳ��
		$data['login_out']=$data['base']."login_out/";	//��¼��֤
		$data['delete']=$data['base']."delete/";	//ɾ��ҳ��
		$data['update']=$data['base']."update/";	//�޸�ҳ��
		$data['picture']=$this->config->item('img_url');	//ͼƬ·��		
		$data['username'] = $this->session->userdata('username');	//��¼����
		$data['js']=$this->config->item('js_url');//js·��
		
		$data['into']=$data['base']."into/";	//��Ӵ���ҳ��
				
		$this->load->view('v_insert', $data);
	}
	function into(){
		$this->load->model('m_ci');
		$this->m_ci->into();
		redirect('my_ci');
	}
	
	//ɾ������
	function delete(){
		$id=$this->uri->segment(3);
		$this->load->model('m_ci'); 
		$this->m_ci->delete($id);
		redirect('my_ci');
	}
	
	//�޸�����
	function update(){
		$data['base']=$this->config->item('base_url')."index.php/my_ci/";	//��Ŀ¼
		$data['insert']=$data['base']."insert/";	//���ҳ��
		$data['login']=$data['base']."login/";	//��¼ҳ��
		$data['login_out']=$data['base']."login_out/";	//��¼��֤
		$data['delete']=$data['base']."delete/";	//ɾ��ҳ��
		$data['update']=$data['base']."update/";	//�޸�ҳ��
		$data['picture']=$this->config->item('img_url');	//ͼƬ·��		
		$data['username'] = $this->session->userdata('username');	//��¼����
		$data['js']=$this->config->item('js_url');//js·��
		
		$id=$this->uri->segment(3);
		$data['update_ok']=$data['base']."update_ok/$id/";	//�޸Ĵ���ҳ��
		
		$this->load->model('m_ci'); 
		$data['ci_update']=$this->m_ci->update($id);
		$this->load->view('v_update',$data);
	}
	function update_ok(){
		$id=$this->uri->segment(3);
		$this->load->model('m_ci');
		$this->m_ci->update_ok($id);
		redirect('my_ci');
	}
}

?>