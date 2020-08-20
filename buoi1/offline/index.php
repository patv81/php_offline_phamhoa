<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	<?php
	require_once("html/head.php");
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	echo "-----<br>";
	if(isset($_POST["submit"])){
		
		$user = $_POST["username"];
		$pass = $_POST["pass"];
		if($user == "admin" && $pass =="123456" )
    	{
			header("location:admin.php");
			exit;
    	}
	 	if ($user == "member" && $pass == "123456") {
			header("location:member.php");
			exit;
		}
		
		
		
	}
	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" >
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<?php 
					
					if (isset($_POST["submit"]))
					{
					echo '<h3 style="color:red;font-weight:bold"> Dang nhap sai </h3>';
					}
					?>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Sign in
						</button>
					</div>


				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
	<?php require_once("html/script.php");
	?>

</body>
</html>