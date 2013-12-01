<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabinet extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
         public $data= array();
    
        function __construct()
        {
            parent::__construct();
            
            $config['upload_path'] = 'assets/avatar';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '10000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            
            //$this->load->library('ion_auth');
            $this->load->library('form_validation');
            $this->load->library('upload', $config);
            
            $this->load->helper('language');
            $this->load->helper('url');

            $this->load->model('auth/ion_auth_model');
            $this->load->model('cabinet/cabinet_model');
            
            $this->form_validation
                    ->set_error_delimiters(
                    '<span class="help-inline">',
                    '</span>'
                    );
            
            
            $this->lang->load('auth');
            $this->lang->load('cabinet');
            
        }
    
        
	public function index()
	{
            if (!$this->ion_auth->logged_in())
            {
                redirect('login', 'refresh');
            }
            
          
            $this->load->view('user_bonus');
	}
        
        public function editForm()
	{
            if (!$this->ion_auth->logged_in())
            {
            redirect('login', 'refresh');
            }
            $data['headingttitle'] = 'Edit Form';
            $data['user'] = $this->ion_auth->user()->row(); 
            $data['userData'] =  $this->ion_auth->user_data();
            

            $this->load->view('cabinet/edit_form', $data);
            
        }
        
        public function update()
	{
            if (!$this->ion_auth->logged_in())
            {
            redirect('login', 'refresh');
            }
            
            $user = $this->ion_auth->user()->row();
            
            
            if (isset($_POST) && !empty($_POST))
            {
                    $data = array(
                        'first_name' => $this->input->post('first_name'),
                        'last_name'  => $this->input->post('last_name'),
                        'phone'  => $this->input->post('phone'),
                    );
                    
                    $userData = array(
                        'passport_series'      => $this->input->post('passport_series'),
                        'passport_series_number'      => $this->input->post('passport_series_number'),
                        'passport_issued'      => $this->input->post('passport_issued'),
                        'passport_date_issued'      => $this->input->post('passport_date_issued'),
                        'address_registration'      => $this->input->post('address_registration'),
                        'iin'      => $this->input->post('iin'),
                        'preference_region'      => $this->input->post('preference_region'),
                        'preference_district'      => $this->input->post('preference_district'),
                   );
                    
             $show['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
                   
            $show['first_name']       = array(
                'name'  => 'first_name',
                'id'    => 'first_name',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('first_name', $data['first_name']),
            );
            $show['last_name']        = array(
                'name'  => 'last_name',
                'id'    => 'last_name',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('last_name', $data['last_name']),
            );

            $show['phone']    = array(
                'name'  => 'phone',
                'id'    => 'phone',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('phone', $data['phone']),
            );

            $show['passport_series']       = array(
              'name'  => 'passport_series',
              'id'    => 'passport_series',
              'type'  => 'text',
              'value' => $this->form_validation->set_value('passport_series', $userData['passport_series']),
            );
              
            $show['passport_series_number']       = array(
                'name'  => 'passport_series_number',
                'id'    => 'passport_series_number',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('passport_series_number', $userData['passport_series_number']),
            );
            
             $show['passport_issued']       = array(
                'name'  => 'passport_issued',
                'id'    => 'passport_issued',
                'rows'  => '5',
                'value' => $this->form_validation->set_value('passport_issued', $userData['passport_issued']),
            );
             
             $show['passport_date_issued']       = array(
                'name'  => 'passport_date_issued',
                'id'    => 'passport_date_issued',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('passport_date_issued', $userData['passport_date_issued']),
            );
             
            $show['iin']       = array(
                'name'  => 'iin',
                'id'    => 'iin',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('iin', $userData['iin']),
            );

            $show['address_registration']  = array(
            'name'  => 'address_registration',
            'id'    => 'address_registration',
            'rows'  => '5',
            'value' => $this->form_validation->set_value('address_registration', $userData['address_registration']),
            );
            
             $show['preference_region']  = array(
            'name'  => 'preference_region',
            'id'    => 'preference_region',
            'rows'  => '5',
            'value' => $this->form_validation->set_value('address_registration', $userData['preference_region']),
            );
             
               $show['preference_district']  = array(
            'name'  => 'preference_district',
            'id'    => 'preference_district',
            'rows'  => '5',
            'value' => $this->form_validation->set_value('address_registration', $userData['preference_district']),
            );
               
               $show['password']         = array(
                'name'  => 'password',
                'id'    => 'password',
                'type'  => 'password',
                'value' => $this->form_validation->set_value('password'),
            );
            $show['password_confirm'] = array(
                'name'  => 'password_confirm',
                'id'    => 'password_confirm',
                'type'  => 'password',
                'value' => $this->form_validation->set_value('password_confirm'),
            );
              
             
            if ($this->form_validation->run() === TRUE)
                {
                 
                    if ($this->upload->do_upload('avatar'))
                    {
                       $ava = $this->upload->data();
                       $data['avatar'] = $ava['file_name'];
                    } 
                       
                       $this->ion_auth_model->update($user->id, $data,$userData); 
                       $show['heading_title'] = "Редактирование личных данных";
                       $show['message'] = "success"; 
                       $this->load->view('cabinet/success', $show); 
                       return TRUE;
                } else {
                    
                    $this->load->view('edit_error', $show);
                    return TRUE;
                } 
           
                
              // $this->load->view('edit_form', $show);
             
            }
            
            
            
            


       // $this->load->view('cabinet/edit_error', $this->data);
	}
        
        
        
        
   
        
        public function showBonus()
	{
             if (!$this->ion_auth->logged_in())
                {
                    //redirect them to the login page
                    redirect('login', 'refresh');
                }
                $user = $this->ion_auth->user()->row(); 
                $this->data['query'] = $this->cabinet_model->getInvoise($user->id); 
                $this->data['total'] = $this->cabinet_model->getTotalInvoise($user->id); 
                
		$this->load->view('user_bonus',$this->data);
	}
        
         public function invoice()
	{
             if (!$this->ion_auth->logged_in())
                {
                    //redirect them to the login page
                    redirect('login', 'refresh');
                }
                $user = $this->ion_auth->user()->row(); 
                $this->data['query'] = $this->cabinet_model->getInvoise($user->id); 
                $this->data['total'] = $this->cabinet_model->getTotalInvoise($user->id); 
                
		$this->load->view('invoice',$this->data);
	}
        
        public function members()
	{
             if (!$this->ion_auth->logged_in())
                {
                    //redirect them to the login page
                    redirect('login', 'refresh');
                }
		$this->load->view('members');
	}
        
         public function genialogy()
	{
             if (!$this->ion_auth->logged_in())
                {
                    //redirect them to the login page
                    redirect('login', 'refresh');
                }
            $this->load->view('genialogy');
	}
        
        
        
        
        
        
        
        
        
        
        
     
}
