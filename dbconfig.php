<?php

	global $con;

	$con = mysqli_connect('localhost','root','','prakweb');

	if(!$con)
	{
		echo 'Tidak dapat terhubung ke database';
		die();
	}