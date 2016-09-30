<?php 

	const DB_HOST = 'annehindkjaer.com.mysql';
	const DB_USER = 'annehindkjaer_c';
	const DB_PASS = 'JyMMMSDd';
	const DB_NAME = 'annehindkjaer_c';


	$link = new mysqli( DB_HOST, DB_USER, DB_PASS ,DB_NAME );

	if ($link->connect_error) {
		die('connect error ('.$link->connect_errno.') '.$link->connect_error);

}
	$link->set_charset('utf8');

?>
