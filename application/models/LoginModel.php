<?php 

  class LoginModel extends CI_model
  {
  	public function __construct ()
    {
  		parent::__construct();
  	}

    public function store_user($data)
    {
      $this->db->insert('user_details',$data);
      return $this->db->insert_id();
    }
    
    public function login_validate($data)
    {
      $this->db->where('email',$data['email']);
      // $this->db->where('password',$data['password']);
      return $this->db->get('user_details')->row();
    }

    public function store_post($data)
    {
      $this->db->insert('post',$data);
      return $this->db->insert_id();
    }

    public function user_fetch_post($user_id)
    {
      $this->db->where('user_id',$user_id);
      return $this->db->get('post')->result();  
    }

    // public function display_all_post()
    // {
    //   return $this->db->get('post')->result(); 
    // }
    public function display_all_post($limit,$offset)
    {
      // return $this->db->get('post')->result(); 
       $q=$this->db->select('')
            ->from('post')
            ->limit($limit,$offset)
            ->get();
        // echo $this->db->last_query();exit;
      return $q->result();
    }
    public function explore($id)
    {
      $this->db->where('user_id',$id);
      return $this->db->get('post')->result(); 
    }
    public function display_all_user()
    {
      return $this->db->get('user_details')->result(); 
    }
    public function count_post($id)
    {
      $this->db->where('user_id',$id);
      return $this->db->count_all('post');
    }
    public function user_ki_detail($id)
    {
       $this->db->where('user_id',$id);
      return $this->db->get('user_details')->row(); 
    }
    public function update_bio($data)
    {
       $this->db->where('user_id', $data['user_id']); 
       return $this->db->update('user_details', ['bio'=>$data['update_bio']]);
    }
    public function bio($id)
    {
       $this->db->where('user_id',$id);
      return $this->db->get('user_details')->row(); 
    }
    public function update_username($data)
    {
       $this->db->where('user_id', $data['user_id']); 
       return $this->db->update('user_details', ['username'=>$data['update_username']]);
    }
    public function varify_email($email)
    {
      $this->db->where('email',$email);
      return $this->db->get('user_details')->row();  
     
    }
    public function save_otp($data)
    {
      $this->db->insert('forget_password',$data);
      return $this->db->insert_id();    
    }

    public function check_otp($otp,$email_for_password_change)
    {
      $this->db->where('email',$email_for_password_change);
      $this->db->where('otp',$otp);
      $this->db->where('DATE_ADD(dateAndTime,INTERVAL 2 MINUTE) >','NOW()',FALSE);
      return $this->db->get('forget_password')->row();
    }

    public function update_password($data)
    {
       $this->db->where('email',$data['email']);
       $this->db->update('user_details',['password'=>$data['password']]);
       return true;
    }

    public function dltUsedOtp($email_for_password_change)
    {
      $this->db->where('email',$email_for_password_change);
      return $this->db->delete('forget_password');
    }

    public function post_num_rows()
    {
      return $this->db->get('post')->num_rows(); 
    }

    public function display_all_post_ByCat($limit,$offset,$cat)
    {
       $q=$this->db->select('')
            ->from('post')
            ->like('category',$cat)
            ->limit($limit,$offset)
            ->get();
      return $q->result();
    }
    public function post_search($post_search)
    {
       $q=$this->db->select('')
            ->from('post')
            ->like('title',$post_search)
            ->get();
      return $q->result();    
    }

  }
?>