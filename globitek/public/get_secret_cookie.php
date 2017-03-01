<!doctype html>
<html>
<head></head>
<body>
	<?php
		require_once('../private/initialize.php');
		if(signed_string_is_valid($_COOKIE['scrt'])){
			echo str_rot(explode('--', $_COOKIE['scrt'])[0]);
		}else{
			echo "not signed correctly";
		}

	 ?>
</body>
</html>