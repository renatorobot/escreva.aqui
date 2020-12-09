<?php

	require_once 'util/Route.class.php';

if (isset($_GET['include'])) {

	$action = $_GET['include'];

}else{

	$action = null;

}

if($action = "note"){

	include 'view/note.view.php';
	
}

?>