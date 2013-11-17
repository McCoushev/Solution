<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MX_Controller {

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
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
        
        public function views($page = 'home')
        {
            
            if (file_exists(APPPATH . "modules/pages/views/" .$page.'.php' ))                                                                                                                                                                                                                          {
                   //$data['user']      = $this->ion_auth->profile();
                    //$data['logged_id'] = $this->ion_auth->logged_in();
                    $this->load->view($page);
                    //$this->layout->view('pages/' .$page, $data);
                    }
                    else
                    {
                                      $this->layout->view('pages/view', $page);
                     }
                     
            //echo $page;
             //echo 'application/modules/pages/views/'.$page.'.php';
             
               // if (!file_exists('../views/'.$page.'.php') )
               // {
                     //echo  '../views/'.$page.'.php';
                        //show_404();
               // }
              //  $this->load->view($page);
                //$data['title'] = ucfirst($page); // Сделать первую букву заглавной

               // $this->load->view('templates/header', $data);
                
                //$this->load->view('templates/footer', $data);

        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */