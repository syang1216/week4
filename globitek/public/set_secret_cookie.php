<?php
	require_once('../private/initialize.php');
	setcookie("scrt", sign_string(str_rot("I have a secret to tell.")));
?>