<?php
include_once 'Person.class.php';

class Contact extends Person{
	private $contact_address;
	private $contact_facebook;
	private $contact_twitter;
	
	
	public function get_contact_address() {
	    return $this->contact_address;
	}
	public function set_contact_address($contact_address) {
	    $this->contact_address = $contact_address;
	}
	
	public function get_contanct_facebook() {
	    return $this->contanct_facebook;
	}
	public function set_contanct_facebook($contanct_facebook) {
	    $this->contanct_facebook = $contanct_facebook;
	}
	
	public function get_contact_twitter() {
	    return $this->contact_twitter;
	}
	public function set_contact_twitter($contact_twitter) {
	    $this->contact_twitter = $contact_twitter;
	}
	
}
