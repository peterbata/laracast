<?php

function legalAge($age) {

	$newage = ($age < 16) ? 'child' : 'adult';

	//

 	echo '<pre>';
	
	 	die(var_dump($newage));

	echo '</pre>';

}