<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calendarModel extends CI_Model {


/*Read the data from DB */
	Public function getEvents()
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







}