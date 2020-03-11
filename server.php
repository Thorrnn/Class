<?php

require_once('request.class.php');

$requestClass = new Request();

if( $requestClass->isPost() ){

	$requestClass->required('title');
	$requestClass->required('annotation');
	$requestClass->required('content');
	$requestClass->min('title', 5);
	$requestClass->max('annotation', 25);
	$requestClass->isEmail('email');
	$requestClass->maxValue('views',100);
	$requestClass->minValue('views',10);
	$errors = $requestClass->getErrors();

	echo json_encode($errors);
}

?>
