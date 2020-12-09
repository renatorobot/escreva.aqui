<?php 

class Note{

    private $id;
    private $name;
    private $text;
    private $dateCreation;
    private $dateUpdate;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getText(){
		return $this->text;
	}

	public function setText($text){
		$this->text = $text;
	}

	public function getDateCreation(){
		return $this->dateCreation;
	}

	public function setDateCreation($dateCreation){
		$this->dateCreation = $dateCreation;
	}

	public function getDateUpdate(){
		return $this->dateUpdate;
	}

	public function setDateUpdate($dateUpdate){
		$this->dateUpdate = $dateUpdate;
	}

}

?>