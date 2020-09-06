<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('LoginModel');
		$this->load->library('pagination');
	}
	public function register()
	{
		if(isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('dashboard') );
		}
		$this->load->view('inc-files/head.php');
		$this->load->view('register');
		$this->load->view('inc-files/footer.php');
	}
	public function register_process()
	{
		$array = array(

                 	'username' 			=> $this->input->post('username'),
                 	'password' 			=> $this->input->post('password'),
                 	'phone'		 		=> $this->input->post('phone'),
                 	'email'		 		=> $this->input->post('email')

                 );
		if($this->form_validation->run('registerform'))
		{
			$data=array(

                 	'username' 			=> $this->input->post('username'),
                 	'password' 			=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                 	'phone'		 		=> $this->input->post('phone'),
                 	'email'		 		=> $this->input->post('email')

                 );
			if($this->LoginModel->store_user($data))
			{
				$this->session->set_flashdata('msg_print','registration Sucessfull');
				$this->session->set_flashdata('flash_class','alert alert-success');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('error_print','Something went wrong!');
				$this->session->set_flashdata('flash_class','alert alert-danger');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			$this->load->view('inc-files/head.php');
			$this->load->view('register');
			$this->load->view('inc-files/footer.php');
		}
	}
	public function login()
	{
		if(isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('dashboard') );
		}
		$this->load->view('inc-files/head.php');
		$this->load->view('login');
		$this->load->view('inc-files/footer.php');

	}
	public function login_check()
	{
		$array = array(
                 	'password' 			=> $this->input->post('password'),
                 	'email'		 		=> $this->input->post('email')
                 );

		if($this->form_validation->run('loginform'))
		{
			$a=$this->LoginModel->login_validate($array);
			// echo $a->password;exit;
			if(password_verify($this->input->post('password'),$a->password))
			{
				$user_id=$a->user_id;
				$username=$a->username;
				
				$this->session->set_userdata('email',$this->input->post('email'));
				$this->session->set_userdata('user_id',$user_id);
				$this->session->set_userdata('username',$username);
				if(!empty($this->input->post('rememberMe')))
				{
					setcookie("username",$this->input->post('email'),time()+(1*60*60));
					setcookie("password",$this->input->post('password'),time()+(1*60*60));
					
				}
				else
				{
					if(isset($_COOKIE["username"]))
					{
						setcookie("username","");
					}
					if(isset($_COOKIE["password"]))
					{
						setcookie("password","");
					}
				}
				return redirect( base_url('dashboard') );
			}
			else
			{
				$this->session->set_flashdata('login_error', 'Username or password is wrong!');
				$this->session->set_flashdata('flash_class','alert alert-danger');
	            return redirect($_SERVER['HTTP_REFERER']);
			}
			
		}
		else
		{
			$this->load->view('inc-files/head.php');
			$this->load->view('login');
			$this->load->view('inc-files/footer.php');
		}
	}
	public function dashboard()
	{
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}
		$this->load->view('inc-files/head.php');
		$this->load->view('dashboard.php');
			
	}
	public function logout()
	{
		$this->session->sess_destroy();
        return redirect( base_url('login') );
	}

	public function write_something()
	{
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}
			$this->load->view('inc-files/head_inner.php');
			$this->load->view('write_something.php');
			$this->load->view('inc-files/footer_inner.php');
		
		
	}
	public function upload_post()
	{
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $this->load->library('upload',$config);


		if($this->form_validation->run('postForm') && $this->upload->do_upload('post_img'))
		{
		
			$cat= $this->input->post('category');
			$category=implode(' ',$cat);
			$array = array(

                 	'title' 			=> $this->input->post('title'),
                 	'detail' 			=> $this->input->post('detail'),
                 	'category'          =>$category,
                 	'user_id'           =>$this->session->userdata['user_id']
                 );

			$img_data=$this->upload->data();

			$array['post_img']=base_url("uploads/".$img_data['raw_name'].$img_data['file_ext']);
			if($this->LoginModel->store_post($array))
			{
				$this->session->set_flashdata('msg_post','Posted Sucessfull');
				$this->session->set_flashdata('flash_class','alert alert-success');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('error_post','Something went wrong!');
				$this->session->set_flashdata('flash_class','alert alert-danger');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}

		}
		else
		{ 

			$upload_error=$this->upload->display_errors();

			$this->load->view('inc-files/head_inner.php');
			$this->load->view('write_something',compact('upload_error'));
			$this->load->view('inc-files/footer_inner.php');
		}

	}

	public function blog()
	{
		$this->load->view('inc-files/head.php');
		$this->load->view('blog.php');
		$this->load->view('inc-files/footer.php');
	}

	public function explore()
	{
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}
		$id=$this->session->userdata['user_id'];
		$post_tbl=$this->LoginModel->explore($id);
		// print_r($post_tbl);

		$this->load->view('inc-files/head_inner.php');
		$this->load->view('explore',['post_tbl'=>$post_tbl]);
		$this->load->view('inc-files/footer_inner.php');
	}
	public function home()
	{
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}

		$user_tbl=$this->LoginModel->display_all_user();
		// $post_tbl=$this->LoginModel->display_all_post();

		$config=[
		        'base_url' => base_url('home'),
		        'per_page' =>4,
		        'total_rows' => $this->LoginModel->post_num_rows(),
		        'full_tag_open'=>"<ul class='pagination'>",
		        'full_tag_close'=>"</ul>",
		        'next_tag_open' =>"<li>",
		        'next_tag_close' =>"</li>",
		        'prev_tag_open' =>"<li>",
		        'prev_tag_close' =>"</li>",
		        'num_tag_open' =>"<li>",
		        'num_tag_close' =>"<li>",
		        'cur_tag_open' =>"<li class='active'><a>",
		        'cur_tag_close' =>"</a></li>"
		 ];
		$this->pagination->initialize($config);
		// $uri=$this->uri->segment(2)?$this->uri->segment(2):0;
		// $post_tbl=$this->LoginModel->display_all_post($config['per_page'],$uri);
		$post_tbl=$this->LoginModel->display_all_post($config['per_page'],$this->uri->segment(2));
		$this->load->view('inc-files/head_inner.php');
		$this->load->view('home',['user_tbl'=>$user_tbl,'post_tbl'=>$post_tbl]);
		$this->load->view('inc-files/footer_inner.php');
	}
	public function profile()
	{
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}
		$count_post=$this->LoginModel->count_post($this->session->userdata['user_id']);
		$user_ki_detail=$this->LoginModel->user_ki_detail($this->session->userdata['user_id']);
		$bio=$this->LoginModel->bio($this->session->userdata['user_id']);
		$this->load->view('inc-files/head_inner.php');
		$this->load->view('profile',['count_post'=>$count_post,'user_ki_detail'=>$user_ki_detail,'bio'=>$bio]);
		$this->load->view('inc-files/footer_inner.php');
	}
	public function update_bio()
	{
		$array = array(
                 	'update_bio'		 		=> $this->input->post('update_bio'),
                 	'user_id'                   =>$this->session->userdata['user_id']
                 );	
		if($this->form_validation->run('update_bio'))
		{
			if($this->LoginModel->update_bio($array))
			{
				$this->session->set_flashdata('msg_print','Bio Updated Sucessfull');
				$this->session->set_flashdata('flash_class','alert alert-success');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('error_print','Something went wrong!Error in Updation');
				$this->session->set_flashdata('flash_class','alert alert-danger');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			return redirect($_SERVER['HTTP_REFERER']);
		}

	}
	public function update_username()
	{
		$array = array(
                 	'update_username'		 		=> $this->input->post('update_username'),
                 	'user_id'                   =>$this->session->userdata['user_id']
                 );	

		if($this->form_validation->run('update_username'))
		{
			if($this->LoginModel->update_username($array))
			{
				
				$this->session->set_flashdata('msg_print','Username Updated Sucessfull');
				$this->session->set_flashdata('flash_class','alert alert-success');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('error_print','Something went wrong!Error in Updation');
				$this->session->set_flashdata('flash_class','alert alert-danger');
		 		return redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			return redirect($_SERVER['HTTP_REFERER']);
		}

	}	

	public function forget_password()
	{
		if(isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('dashboard') );
		}
		$this->load->view('inc-files/head.php');
		$this->load->view('forget_password');
		$this->load->view('inc-files/footer.php');	
	}
	public function send_otp()
	{
		$email=$this->input->post('email');

		if($this->form_validation->run('varify_email'))
		{  
			if($this->LoginModel->varify_email($email))
			{
				$gen_otp=rand(100000,999999);
				$dataArray=array(
					'email'=>$email,
					'otp'=>$gen_otp,
				);
				$this->LoginModel->save_otp($dataArray);
				$this->session->set_userdata('email_for_password_change',$email);
				//here i will add email function
				$this->session->set_flashdata('status',20);
				$this->session->set_flashdata('msg_print','OTP send successfully');
				$this->session->set_flashdata('flash_class','alert alert-success');

		 		return redirect($_SERVER['HTTP_REFERER']);				
			}
			else
			{
				$this->session->set_flashdata('error_print','Email does not exits');
				$this->session->set_flashdata('flash_class','alert alert-danger');
		 		return redirect($_SERVER['HTTP_REFERER']);				
			}
		}
		else
		{
			// return redirect($_SERVER['HTTP_REFERER']);
				$this->load->view('inc-files/head.php');
				$this->load->view('forget_password');
				$this->load->view('inc-files/footer.php');	
		}
	}
	public function set_forget_password()
	{
		if(isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('dashboard') );
		}		
		if($this->form_validation->run('varify_otp'))
		{
			$otp=$this->input->post('otp');
			$email_for_password_change=$this->session->userdata['email_for_password_change'];
			if($result=$this->LoginModel->check_otp($otp,$email_for_password_change))
			{
				$array = array(
                 	'password' 			=> password_hash($this->input->post('new_password'),PASSWORD_DEFAULT),
                 	'email'		 		=> $email_for_password_change
                 );
				if($this->LoginModel->update_password($array))
				{
					$this->session->set_flashdata('msg_print','Password Change Successfully');
					$this->session->set_flashdata('flash_class','alert alert-success');
					//delete that otp that is used
					$this->LoginModel->dltUsedOtp($email_for_password_change);
			 		return redirect($_SERVER['HTTP_REFERER']);				
				}
				else
				{
					$this->session->set_flashdata('error_print','Oopss! Error in password chnage');
					$this->session->set_flashdata('flash_class','alert alert-danger');
			 		return redirect($_SERVER['HTTP_REFERER']);		
				}
				
			}
			else
			{
				$this->session->set_flashdata('error_print','Oopss! OTP is Wrong');
				$this->session->set_flashdata('flash_class','alert alert-danger');
		 		return redirect($_SERVER['HTTP_REFERER']);			
			}
		}
		else
		{
			$this->session->set_flashdata('status',20);
			$this->load->view('inc-files/head.php');
			$this->load->view('forget_password');
			$this->load->view('inc-files/footer.php');	
		}
	}
	public function cat()
	{
		// echo "inside category";
		$cat=$_POST['cat'];
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}

		$user_tbl=$this->LoginModel->display_all_user();

		$config=[
		        'base_url' => base_url('home'),
		        'per_page' =>20,
		        'total_rows' => $this->LoginModel->post_num_rows(),
		        'full_tag_open'=>"<ul class='pagination'>",
		        'full_tag_close'=>"</ul>",
		        'next_tag_open' =>"<li>",
		        'next_tag_close' =>"</li>",
		        'prev_tag_open' =>"<li>",
		        'prev_tag_close' =>"</li>",
		        'num_tag_open' =>"<li>",
		        'num_tag_close' =>"<li>",
		        'cur_tag_open' =>"<li class='active'><a>",
		        'cur_tag_close' =>"</a></li>"
		 ];
		$this->pagination->initialize($config);

		$post_tbl=$this->LoginModel->display_all_post_ByCat($config['per_page'],$this->uri->segment(2),$cat);
		
		$this->load->view('home',['cat'=>$cat,'user_tbl'=>$user_tbl,'post_tbl'=>$post_tbl]);
		$this->load->view('inc-files/footer_inner.php');
	}
	public function post_search()
	{
		if(!isset($this->session->userdata['user_id']))
		{
			return redirect( base_url('login') );
		}
		$post_search=$this->input->post('post_search');
		$post_tbl=$this->LoginModel->post_search($post_search);

		$this->load->view('inc-files/head_inner.php');
		$this->load->view('explore',['post_tbl'=>$post_tbl]);
		$this->load->view('inc-files/footer_inner.php');
	}

}



