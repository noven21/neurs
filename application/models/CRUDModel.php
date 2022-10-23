<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
        
     
    }

    //echo lang SELECT DISTINCT a.roomName, b.itemName from tbl_reservation 
    //INNER JOIN 
    //(SELECT roomName from `tbl_room` WHERE isActive = 1 GROUP by roomName) as a 
    //ON tbl_reservation.roomName != a.roomName 
    //INNER JOIN 
    //(SELECT itemName from `tbl_item` WHERE isActive = 1 GROUP by itemName) as b 
    //ON tbl_reservation.itemName != b.itemName 
    //WHERE tbl_reservation.start >= '2020-05-02 09:30:00' 
    //ORDER BY tbl_reservation.roomName asc




    //ACCOUNT RELATED//

    //craete account

    function createAccount()
    {
        $data = array (
            'Username' => $this->input->post('Username'),
            'Password' => $this->input->post('Password'),
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Birthday' => $this->input->post('Birthday'),
            'Gender' => $this->input->post('Gender'),
            'isActive' => 1,
            'UserType' => 'user',
        );
        $this->db->insert('tbl_accounts', $data);
    }
    //kukuhain yung account na ieedit
    function editData($id)
    {
        $query = $this->db->query('SELECT * FROM tbl_accounts WHERE `AID` = '.$id);
        return $query->row();
    }
    //dito yung code para ma edit yung account or dito na talaga ung edit ng account
    function updateAccount($id)
    {
        $data = array (
            'FirstName' => $this->input->post('Firstname'),
            'LastName' => $this->input->post('Lastname'),
            'Birthday' => $this->input->post('Birthday'),
            'Gender' => $this->input->post('Gender'),
            'Address' => $this->input->post('Address'),
            'Email' => $this->input->post('Email')
            

        );
        $this->db->where('AID',$id);
        $this->db->update('tbl_accounts',$data);
    }

      //dito yung code para ma edit yung account or dito na talaga ung edit ng account
      function updatePassword($id)
      {
          $data = array (
              'Password' => $this->input->post('ChangePassword')
            
              
  
          );
          $this->db->where('AID',$id);
          $this->db->update('tbl_accounts',$data);
      }
    //hindi permanent na madedelete yung account. gagawin lang not active para pwede pa din ma retrieve ni user yung account nya
    // kay admin panel ito
    function deleteAccount($id)
    {
        $data = array (
            'isActive' => 0
  

        );
        $this->db->where('AID',$id);
        $this->db->update('tbl_accounts',$data);
    }

    //para mabalik yung account
    //kay admin panel ito    
    function retrieveAccount($id)
     {
         $data = array (
             'isActive' => 1
   
 
         );
         $this->db->where('AID',$id);
         $this->db->update('tbl_accounts',$data);
     }
 

    //get all active account
//    function getAllActiveData()
//    {
//        $query = $this->db->query('SELECT * FROM tbl_accounts WHERE `isActive` = 1');
//        return $query->result();
//    }
//    //get all not active account
//    function getAllInactiveData()
//    {
//        $query = $this->db->query('SELECT * FROM tbl_accounts WHERE `isActive` = 0');
//        return $query->result();
//    }

   
   //for paginatiion active account
   public function get_count() 
   {
       $query = $this->db->where('isActive', 1)->get('tbl_accounts');
       return $query->num_rows();

   }
    //get all active accounts for pagination
    public function get_accounts($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $this->db->where('isActive',1);
        $query = $this->db->get("tbl_accounts");
        return $query->result();
    }
   
   //for paginatiion not active account
   public function get_count_inactive() 
   {
       $query = $this->db->where('isActive', 0)->get('tbl_accounts');
       return $query->num_rows();

   }

   //get all not active accounts for pagination
   public function get_accounts_inactive($limit, $start) 
   {
       $this->db->limit($limit, $start);
       $this->db->where('isActive',0);
       $query = $this->db->get("tbl_accounts");
       return $query->result();
   }

   //get usertype para malaman kung saan mag reredirect yung page
   //kung user ba siya or admin

   function getInfo($user,$pass)
   {
       $this->db->select('UserType');
     
       $this->db->where('Username', $user);
       $this->db->where('Password', $pass);
    
        
       $query = $this->db->get('tbl_accounts');
       return $query->row();

    }
    //same lang ng nasa taas
    //kuhain ang user type para malaman kung saan mapupunta ang website kapag nag login
    function getUserType($username, $password)
    {
        $this->db->where('Username', $username);
        $this->db->where('Password', $password);
        
        $query = $this->db->get('tbl_accounts');

        if($query->num_rows() > 0)
        {
            $get = $query->row();
        
          
            switch ($get->UserType)
            {
                case 'admin':
					redirect(base_url() . 'index.php/main/adminpanel');
                break;
                case 'user':
					redirect(base_url() . 'index.php/main/userpanel');
                break;
                default:
                	redirect(base_url() . 'index.php/main');
            break;
            }
            
        }
       
    }
  
	//validation kung makakapag login ba sa system

    function can_login($username, $password)
    {
        $this->db->where('Username', $username);
        $this->db->where('Password', $password);
        $this->db->where('isActive', 1);
        
        $query = $this->db->get('tbl_accounts');

        if($query->num_rows() > 0)
        {
            return $query->row();
            
        }
        else
        {
            return false;
        }
    }


  
	//validation kung makakapag reserve ba si user

    function can_reserve($datestart, $dateend,$room,$item)
    {
        $this->db->where('start >=', $datestart);
        $this->db->where('end <=', $dateend);
        $this->db->where('roomNo', $room);
        $this->db->where('itemNo', $item);
        $this->db->where('isDone', 0);
        
        $query = $this->db->get('tbl_reservation');

        if($query->num_rows() > 0)
        {
            return $query->row();
            
        }
        else
        {
            return false;
        }
    }

    
	//validation kung makakapag reserve ba si user

 
    function can_reserve2($datestart, $dateend,$room)
    {
        $this->db->where('end BETWEEN "'. $datestart.'" AND "'.$dateend.'"');
        $this->db->where('roomNo', $room);
        $this->db->where('isDone', 0);
        
        $query = $this->db->get('tbl_reservation');

        if($query->num_rows() > 0)
        {
            return $query->row();
            
        }
        else
        {
            return false;
        }
    }

    
 
    function can_reserve3($datestart, $dateend,$item)
    {
        $this->db->where('end BETWEEN "'. $datestart.'" AND "'.$dateend.'"');
        $this->db->where('itemNo', $item);
        $this->db->where('isDone', 0);
        
        $query = $this->db->get('tbl_reservation');

        if($query->num_rows() > 0)
        {
            return $query->row();
            
        }
        else
        {
            return false;
        }
    }



    //projector

  //get all active projector
  function getAllActiveProjector()
  {
      $query = $this->db->query('SELECT * FROM tbl_item WHERE `isActive` = 1');
      return $query->result();
  }
  //get all not active account
  function getAllInactiveProjector()
  {
      $query = $this->db->query('SELECT * FROM tbl_item WHERE `isActive` = 0');
      return $query->result();
  }

  //add projector
  function addProjector()
  {
    $data = array (
        'itemName' => $this->input->post('AddItem'),
        'isActive' => 1,
      
    );
    $this->db->insert('tbl_item', $data);
  }


  //edit projector
  function editProjector($id)
  {
      $query = $this->db->query('SELECT * FROM tbl_item WHERE `itemNo` = '.$id);
      return $query->row();
  }

  //updaet projector
  function updateProjector($id)
  {
      $data = array (
          'itemName' => $this->input->post('Projector')
      

      );
      $this->db->where('itemNo',$id);
      $this->db->update('tbl_item',$data);
  }

   //delete projector
   function deleteProjector($id)
   {
       $data = array (
           'isActive' => 0
       
 
       );
       $this->db->where('itemNo',$id);
       $this->db->update('tbl_item',$data);
   }

   //delete projector permanently
   function deleteProjectorPermanently($id)
   {
     
        $this->db->where('itemNo',$id);
        $this->db->delete('tbl_item');
   }

      //retrieve projector
      function retrieveProjector($id)
      {
          $data = array (
              'isActive' => 1
          
    
          );
          $this->db->where('itemNo',$id);
          $this->db->update('tbl_item',$data);
      }




          //Room

        //get all active room
        function getAllActiveRoom()
        {
            $query = $this->db->query('SELECT * FROM tbl_room WHERE `isActive` = 1');
            return $query->result();
        }


        // function getRoomDepend($date_start)
        // {
        //     $this->db->select('*');
        //     $this->db->from('tbl_item');
        //     $this->db->where('isActive',1);
        //     $this->db->where('itemNo', $date_start);
       
        //     $query = $this->db->get();
        //     $output = '<option value ="">Select Item</option>';
        //     foreach($query->result() as $row)
        //     {
        //      $output .= '<option value="'.$row->itemNo.'">'.$row->itemName.'</option>';
        //     }
        //     return $output;
        // }


        //get all not active account
        function getAllInactiveRoom()
        {
            $query = $this->db->query('SELECT * FROM tbl_room WHERE `isActive` = 0');
            return $query->result();
        }

        //add room
        function addRoom()
        {
          $data = array (
              'roomName' => $this->input->post('AddRoom'),
              'isActive' => 1,
            
          );
          $this->db->insert('tbl_room', $data);
        }
      

        //edit room
        function editRoom($id)
        {
            $query = $this->db->query('SELECT * FROM tbl_room WHERE `roomNo` = '.$id);
            return $query->row();
        }

        //updaet room
        function updateRoom($id)
        {
            $data = array (
                'roomName' => $this->input->post('Room')
            

            );
            $this->db->where('roomNo',$id);
            $this->db->update('tbl_room',$data);
        }

          //delete room
   function deleteRoom($id)
   {
       $data = array (
           'isActive' => 0
       
 
       );
       $this->db->where('roomNo',$id);
       $this->db->update('tbl_room',$data);
   }

     //delete room permanently
   function deleteRoomPermanently($id)
   {
     
        $this->db->where('roomNo',$id);
        $this->db->delete('tbl_room');
   }

      //retrieve room
      function retrieveRoom($id)
      {
          $data = array (
              'isActive' => 1
          
    
          );
          $this->db->where('roomNo',$id);
          $this->db->update('tbl_room',$data);
      }


        //Reservattion

        //get all pending reservation
        function getAllPendingReservation()
        {
            $this->db->select('CONCAT_WS(" ",tbl_accounts.FirstName,tbl_accounts.LastName) AS FullName,tbl_room.roomName as room,tbl_item.itemName as item,tbl_reservation.*',false);
            $this->db->from('tbl_reservation');
            $this->db->join('tbl_accounts', 'tbl_reservation.studentID = tbl_accounts.AID');
            $this->db->join('tbl_room', 'tbl_reservation.roomNo = tbl_room.roomNo');
            $this->db->join('tbl_item', 'tbl_reservation.itemNo = tbl_item.itemNo');
            $this->db->where('tbl_reservation.isDone', 0);
            $query = $this->db->get();
            return $query->result();
        }
        //get all not active account
        function getAllDoneReservation()
        {
            $this->db->select('CONCAT_WS(" " ,tbl_accounts.FirstName,tbl_accounts.LastName) AS FullName,tbl_room.roomName as room,tbl_item.itemName as item,tbl_reservation.*',false);
            $this->db->from('tbl_reservation');
            $this->db->join('tbl_accounts', 'tbl_reservation.studentID = tbl_accounts.AID');
            $this->db->join('tbl_room', 'tbl_reservation.roomNo = tbl_room.roomNo');
            $this->db->join('tbl_item', 'tbl_reservation.itemNo = tbl_item.itemNo');
            $this->db->where('tbl_reservation.isDone', 1);

            $query = $this->db->get();
            return $query->result();
        }

        //done room
        function doneReservation($id)
        {
            $data = array (
                'isDone' => 1
            
        
            );
            $this->db->where('resID',$id);
            $this->db->update('tbl_reservation',$data);
        }

        //para mabalik yung reservation ni user na nasa admin panel    
        function retrieveReservation($id)
        {
            $data = array (
                'isDone' => 0
    

            );
            $this->db->where('resID',$id);
            $this->db->update('tbl_reservation',$data);
        }






        //show rooms on userpanel
        function showRoom()
        {
            $query = $this->db->query('SELECT * FROM tbl_room WHERE `isActive` = 1');
            return $query->result();
        }












        //add reservation
        function addReservation()
        {
            date_default_timezone_set('Asia/Manila'); 
            $now = date('Y-m-d H:i:s');
            $convertStart = date('Y-m-d H:i:s', strtotime($this->input->post('DateStart')));
            $convertEnd = date('Y-m-d H:i:s', strtotime($this->input->post('DateEnd')));

            $data = array (
                'start' => $convertStart,
                'end' => $convertEnd,
                'studentID' => $this->input->post('StudentID'),
                'roomNo' => $this->input->post('roomName'),
                'itemNo' => $this->input->post('itemName'),
                'Instructor' => $this->input->post('Instructor'),
                'collegeDepartment' => $this->input->post('CollegeDepartment'),
                'contactNumber' => $this->input->post('ContactNumber'),
                'dateApplied' => $now,
                'isDone' => 0,
            );

            $this->db->insert('tbl_reservation', $data);
        }

              //delete user reservation
            function deleteUserReservation($id)
            {
                $this->db->where('resID',$id);
                $this->db->delete('tbl_reservation');
            }




            //get all pending reservation
            function getUserReservationList($id)
            {
                $this->db->select('CONCAT_WS(" ",tbl_accounts.FirstName,tbl_accounts.LastName) AS FullName,tbl_room.roomName as room,tbl_item.itemName as item,tbl_reservation.*',false);
                $this->db->from('tbl_reservation');
                $this->db->join('tbl_accounts', 'tbl_reservation.studentID = tbl_accounts.AID');
                $this->db->join('tbl_room', 'tbl_reservation.roomNo = tbl_room.roomNo');
                $this->db->join('tbl_item', 'tbl_reservation.itemNo = tbl_item.itemNo');
                $this->db->where('tbl_reservation.isDone', 0);
                $this->db->where('tbl_reservation.studentID', $id);
                $query = $this->db->get();
                return $query->result();
            }

}
