<?php

	require_once 'util/Route.class.php';
	require_once 'model/Note.class.php';
	require_once 'dao/noteDao.php';


if (isset($_GET['include'])) {

	$action = $_GET['include'];

}else{

	$action = null;

}

if($action = "note-name"){

	$note = new Note();
	$note->setName($_POST['inputName']);
	
	$search = new noteDao();
	$results = $search->noteNameSearch($note->getName());

	if(empty($results)){

		$note->setText("");
		$note->setDateCreation(date("m.d.y"));
		$note->setDateUpdate(date("m.d.y"));

		$search = new noteDao();
		$results = $search->newNote($note);
		$results[0] = new Note();

		include 'view/note.view.php';


	}else{
		
		//include 'view/note.view.php';
	}

	
}

?>