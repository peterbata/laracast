<?php

function connectToDb()

{

		try {

				return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', ''); // PHP Data Objects

		} catch (PDOException $e) {

				die($e->getMessage());

		}
}



function dd($data) {

 	echo '<pre>';
	
	 	die(var_dump($data));

	echo '</pre>';

}