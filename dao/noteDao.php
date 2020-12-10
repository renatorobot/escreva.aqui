<?php

    require_once "util/ConnectionFactory.php";

class noteDao{

	public function noteNameSearch($name){

		try{

			$conn = ConnectionFactory::getConnection();
			$conn->beginTransaction();
			$search = $conn ->prepare("SELECT id, name, text FROM note WHERE name=:name");
			$search ->bindParam(':name', $name);
			$search ->execute();
			$conn->commit();
			$results = $search->fetchAll(PDO::FETCH_CLASS, 'Note');
			return $results;
			
		}catch(Exception $e){

			$conn->rollback();
			

		}

	}


    public function newNote($note){

		
		$text = $note->getText();
		$name = $note->getName();
		$date1 = $note->getDateCreation();
		$date2 = $note->getDateUpdate();


		try{

			$conn = ConnectionFactory::getConnection();
			$conn->beginTransaction();
			$insert = $conn->prepare("INSERT INTO note (name, text, dateCreation, dateUpdate) VALUES (:name, :text, :dateCreation, :dateUpdate)");
			$insert->bindParam(':name', $name);
			$insert->bindParam(':text', $text);
			$insert->bindParam(':dateCreation', $date1);
			$insert->bindParam(':dateUpdate', $date2);

			$insert->execute();
			$conn->commit();

			
		}catch(Exception $e){

			$conn->rollback();
			echo $e;
			

		}

	}


	public function saveNote($note){

		$id = $note->getId();
		$text = $note->getText();
		
		try{

			$conn = ConnectionFactory::getConnection();
			$conn->beginTransaction();
			$up = $conn->prepare("UPDATE note SET text=:text WHERE id=:id");
			$up->bindParam(':text', $text);
			$up->bindParam(':id', $id);
			
			$up->execute();
			$conn->commit();

			
		}catch(Exception $e){

			$conn->rollback();
			echo $e;
			

		}

	}



}


?>