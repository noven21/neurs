<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
        $this->load->library("pagination");
		$this->load->model ('CRUDModel');
		
	}

	public function index()
	{
	
		//$data['result'] = $this->CRUDModel->getAllActiveData() ;
		
		if(	$this->session->set_userdata('Username') != "")
		{
			$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		
			$this->load->view('userpanel', $data);
		
		}
		else
		{

		$this->load->view('homepage');
	    }


	}
	public function create()
	{
		$this->CRUDModel->createAccount();
		redirect("main");
	}
	
	function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
	
		$this->load->model('CRUDModel');
	
			if($this->CRUDModel->can_login($username, $password))
			{
				$session_data = array(
					'Username' => $username,
					'Password' => $password
			
				
					
				);
			
				
				$this->session->set_userdata($session_data);
				
				redirect(base_url() . 'index.php/main/success');
			
	
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid username or 
											password. Please try again.');
				redirect(base_url() . 'index.php/main/failed');
			}
		}	
		else
		{
			$this->session->set_flashdata('error', 'Please fill up');
				redirect(base_url() . 'index.php/main/asdasd');
		}
    }
    

	//this will load when successfully logged in
	public function success()
	{
		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
	
	$this->load->view('success', $data);
	
	}

	//this will load when  logged in failed
	public function failed()
	{
		
	$this->load->view('failed');
	
	}
	//for logout of account
	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url() . 'index.php/main' );
	}



    //CODES FOR USER PANEL SIDE

	public function userpanel()
	{
		
		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
		if($this->session->userdata('Username') =="")
		{
			redirect("main");
		}
		
		$this->load->view('userpanel', $data);
	}

        //view calendar

        public function calendar()
        {
            $data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
            $data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
            if($this->session->userdata('Username') =="")
            {
                redirect("main");
            }
            $this->load->view('calendar',$data);
        }

        //view userpage
        public function userpage()
        {
            $data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
            $data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
            if($this->session->userdata('Username') =="")
            {
                redirect("main");
            }
            $this->load->view('userpanel',$data);
        }

        //view my profile
        public function userprofile()
        {
            $data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
            $data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
            if($this->session->userdata('Username') =="")
            {
                redirect("main");
            }
            $this->load->view('userprofile',$data);
		}
		
		//cghange password
		public function updatepassword($id)
		{
			$password = $this->input->post('ChangePassword');
			$this->CRUDModel->updatePassword($id);
			
				$session_data = array(
				
					'Password' => $password
			
				
					
				);
				$this->session->set_userdata($session_data);
				redirect('main/userprofile');
			
		}


		
	

		//update user information
		public function updateaccount($id)
		{
			$this->CRUDModel->updateAccount($id);
			redirect('main/userprofile');
		}
    
        //reservation userpanel
            public function reservenow()
        {
            $data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
            $data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
            
            //show available room
            $data['room'] = $this->CRUDModel->getAllActiveRoom();
            //show available projector
            $data['projector'] = $this->CRUDModel->getAllActiveProjector();
    
    
    
            
            if($this->session->userdata('Username') =="")
            {
                redirect("main");
            }
            $this->load->view('reservenow',$data);
        }

            //check kung makakapag reserve si user
        function reserve_validation()
        {
            
        
                $start = $this->input->post('DateStart');
                
                $end = $this->input->post('DateEnd');
                $room = $this->input->post('roomName');
                $item = $this->input->post('itemName');
        
        
                if($this->CRUDModel->can_reserve($start,$end, $room,$item))
                {

                    $this->session->set_flashdata('failed', 'Sorry, the date and room you 
                                                    selected already reserved. Please check the calendar first.');
                                                    
                    redirect(base_url() . 'index.php/main/reservefailed');

                }
                else
                {
                    if($this->CRUDModel->can_reserve2($start,$end, $room))
                    {
                        $this->session->set_flashdata('failed', 'Sorry, the datadadadae and room you 
                        selected already reserved. Please check the calendar first.');
                        
                        redirect(base_url() . 'index.php/main/reservefailed');

                        
                    }
                    else
                    {
                        if($this->CRUDModel->can_reserve3($start,$end, $item))
                        {
                        $this->session->set_flashdata('failed', 'Sorry, the tangina and room you 
                        selected already reserved. Please check the calendar first.');
                        
                        redirect(base_url() . 'index.php/main/reservefailed');

                        
                        }
                        else
                        {
                        if($this->input->post('DateStart') == $this->input->post('DateEnd'))
                        {
                            redirect("main/reservenow");
                        }
                        else
                        {
                        
                        $this->CRUDModel->addReservation();
                        redirect("main/userpanel");
                        }
                    }
                    }

                    redirect(base_url() . 'index.php/main/success');
                }
        
        }
        

        
		//show reseravation for userpanel
		public function userreservationlist($id)
		{
			$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
			$data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
		
			$data['list'] = $this->CRUDModel->getUserReservationList($id);
		
			
			if($this->session->userdata('Username') =="")
			{
				redirect("main");
			}

			$this->load->view('userreservationlist',$data);
        }
        

            //create reservation si user
        public function addreservation()
        {
            if($this->input->post('DateStart') == $this->input->post('DateEnd'))
            {
                redirect("main/reservenow");
            }
            else
            {
            
            $this->CRUDModel->addReservation();
            redirect("main/userpanel");
            }
        }

        public function deleteuserreservation($id)
        {

            $this->CRUDModel->deleteUserReservation($id);
            redirect("main/userpanel");
            
        }
        
                //this will load when  reservation failed
        public function reservefailed()
        {
            $this->load->view('reservefailed');
        }













        //CODES FOR ADMIN PANEL SIDE

        public function adminpanel()
	{
	//	$data['result'] = $this->CRUDModel->getAllActiveData();

		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
	
			if($this->session->userdata('Username') =="")
		{
			redirect("main");
		}
		$this->load->view('adminpanel', $data);
    }
    
        //show all accounts for adminpanel

	public function accounts()
	{
		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
	
		//	$data['accounts'] = $this->CRUDModel->getAllActiveData();
		//$data['deletedaccounts'] = $this->CRUDModel->getAllInactiveData();
		
		if($this->session->userdata('Username') =="")
		{
			redirect("main");
		}
	


		$config = array();
		$config["base_url"] = base_url().'/index.php/main/accounts';
		
        $config["total_rows"] = $this->CRUDModel->get_count();
        $config["per_page"] = 10;
		$config["uri_segment"] = 3; 
		
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		
		$data["links"] = $this->pagination->create_links();

        $data['list'] = $this->CRUDModel->get_accounts($config["per_page"], $page);
		$data['list2'] = $this->CRUDModel->get_accounts_inactive($config["per_page"], $page);

		$this->load->view('accounts',$data);
	
		
    }
    
    	//edit account

	public function editaccount($id)
	{
		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['edit'] = $this->CRUDModel->editData($id);
		$this->load->view('editaccount',$data);
	}

	

	//deleteaccount

	public function deleteaccount($id)
	{
		$this->CRUDModel->deleteAccount($id);
		redirect('main/accounts');	
	}

	//retrieve account

	public function retrieveaccount($id)
	{
		$this->CRUDModel->retrieveAccount($id);
		redirect('main/accounts');	
	}


	//show projector for adminpanel
	public function items()
	{
		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
	
		$data['projector'] = $this->CRUDModel->getAllActiveProjector();
		$data['deletedprojector'] = $this->CRUDModel->getAllInactiveProjector();
		
		if($this->session->userdata('Username') =="")
		{
			redirect("main");
		}
		$this->load->view('items',$data);
    }
	
	//addprojector
	public function addprojector()
	{
		
		
		$this->CRUDModel->addProjector();
		redirect('main/items');
	}

    //edit projector
    public function editprojector($id)
    {
        $data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
        $data['edit'] = $this->CRUDModel->editProjector($id);
        $this->load->view('editprojector',$data);
    }
    //dito na talaga mag eedit ng projector
    public function updateprojector($id)
    {
        $this->CRUDModel->updateProjector($id);
        redirect('main/items');
    }

    //delete projector// gagawin niya lang not active

    public function deleteprojector($id)
    {
        $this->CRUDModel->deleteProjector($id);
        redirect('main/items');	
	}
	
	//delete projector permanently

    public function deleteprojectorpermanently($id)
    {
        $this->CRUDModel->deleteProjectorPermanently($id);
        redirect('main/items');	
    }

    //retrieve projector or make it active again
    public function retrieveprojector($id)
    {
        $this->CRUDModel->retrieveProjector($id);
        redirect('main/items');	
    }








		//show rooms for adminpanel
	public function rooms()
	{
		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['room'] = $this->CRUDModel->getAllActiveRoom();
		$data['deletedroom'] = $this->CRUDModel->getAllInactiveRoom();
			
		if($this->session->userdata('Username') =="")
		{
			redirect("main");
		}
		$this->load->view('rooms',$data);
    }
		  
	//addprojector
	public function addroom()
	{
		
		
		$this->CRUDModel->addroom();
		redirect('main/rooms');
	}
    //edit room
    public function editroom($id)
    {
        $data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
        $data['edit'] = $this->CRUDModel->editRoom($id);
        $this->load->view('editroom',$data);
    }
    //update room
    public function updateroom($id)
    {
        $this->CRUDModel->updateRoom($id);
        redirect('main/rooms');
    }

    //delete room

    public function deleteroom($id)
    {
	
        $this->CRUDModel->deleteRoom($id);
        redirect('main/rooms');	
	}
	
	//delete room permanently

    public function deleteroompermanently($id)
    {
        $this->CRUDModel->deleteRoomPermanently($id);
        redirect('main/rooms');	
    }

    //retrieve projector or make it active again
    public function retrieveroom($id)
    {
        $this->CRUDModel->retrieveRoom($id);
        redirect('main/rooms');	
    }






		//show reseravation for adminpanel
	public function reservationlist()
	{
		$data['info'] = $this->CRUDModel->can_login($this->session->userdata('Username'),$this->session->userdata('Password'));
		$data['usertype'] = $this->CRUDModel->getInfo($this->session->userdata('Username'),$this->session->userdata('Password'));
	
		$data['pending'] = $this->CRUDModel->getAllPendingReservation();
		$data['done'] = $this->CRUDModel->getAllDoneReservation();
		
		if($this->session->userdata('Username') =="")
		{
			redirect("main");
		}
		$this->load->view('reservationlist',$data);
    }
        
        	//done reservation

	public function donereservation($id)
	{
		$this->CRUDModel->doneReservation($id);
		redirect('main/reservationlist');	
	}

	//retrieve reservation gawin ulit pending yung reservation

	public function retrievereservation($id)
	{
		$this->CRUDModel->retrieveReservation($id);
		redirect('main/reservationlist');	
	}
}

	

