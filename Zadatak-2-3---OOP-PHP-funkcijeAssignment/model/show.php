<?php

class Show extends BasicInformation implements TheaterInformation {
    private $author;
    private $description;
    private $premium_number;
    
    public function __construct($id, $name, $description, $premium_number, $author) {
        parent::__construct($id, $name);
        $this->description = $description;
        $this->premium_number = $premium_number;
        $this->author = $author;
    }
	
	public function getDescription() {
        return $this->description;
	}
	
	public function setDescription($description) {
        $this->description = $description;
	}
	
	public function getPremium_number() 
    {
        return $this->premium_number;
	}

    public function setPremium_number($premium_number)
    {
        $this->premium_number = $premium_number;
    }
	
	public function getId() {
        return $this->id;
	}
	
	public function setId($id_variable) {
        $this->id=$id_variable;
	}
	
	public function getName() {
        return $this->name;
	}
	
	public function setName($name_variable) {
        $this->name = $name_variable;
	}
 
	public function setAuthor($author) {
		$this->author = $author;
	}

	public function getAuthor() {
		return $this->author;
	}
	
}