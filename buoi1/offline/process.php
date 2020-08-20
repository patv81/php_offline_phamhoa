	<?php

	$user= $_POST["username"];
    $pass= $_POST["pass"];
    if($user == "admin" && $pass =="123456" )
    {
        require_once("admin.php");
    }
    if($user == "member" && $pass =="123456" )
    {
        require_once("member.php");
    }
    
	?>