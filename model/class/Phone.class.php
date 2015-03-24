<?php

class Phone{
	private $id_phone;
	private $contact_id;
	private $phone_number;
	private $phone_operator;
	private $phone_type;
	
	public function __construct($contact_id, $phone_number){
		$this->contact_id = $contact_id;
		$this->phone_number = $phone_number;
	}
	
	
	public function get_id_phone() {
	    return $this->id_phone;
	}
	public function set_id_phone($id_phone) {
	    $this->id_phone = $id_phone;
	}
	
	public function get_contact_id() {
	    return $this->contact_id;
	}
	public function set_contact_id($contact_id) {
	    $this->contact_id = $contact_id;
	}
	
	public function get_phone_number() {
	    return $this->phone_number;
	}
	public function set_phone_number($phone_number) {
	    $this->phone_number = $phone_number;
	}
	
	public function get_phone_operator() {
	    return $this->phone_operator;
	}
	public function set_phone_operator($phone_operator) {
	    $this->phone_operator = $phone_operator;
	}
	
	public function get_phone_type() {
	    return $this->phone_type;
	}
	public function set_phone_type($phone_type) {
	    $this->phone_type = $phone_type;
	}
	
	
}