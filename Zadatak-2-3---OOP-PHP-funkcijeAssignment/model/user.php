<?php

class User extends BasicInformation implements PersonInformation {
    private $status;
	private $email;
	private $pass;
    
    public function __construct($id, $name, $email, $pass, $status)
    {
		parent::__construct($id, $name);
		$this->email = $email;
		$this->pass = $pass;
		$this->status = $status;
    }

	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getPass() {
		return $this->pass;
	}
	
	public function setPass($pass) {
		$this->pass = $pass;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id_variable) {
		$this->id = $id_variable;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name_variable) {
		$this->name = $name_variable;
	}

	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
	}
}