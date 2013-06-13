<?php

/* //////////////// Login System //////////////// */
	
global $status;

session_start();

if(isset($_POST['email'])){

	$email		= getSQLValue($_POST['email']);
	$password	= getSQLValue($_POST['password']);

	$userRS = mysql_query("SELECT * FROM ci_pods_user WHERE email = '$email' AND password = '$password'");

	$numUsers = mysql_num_rows($userRS);
	//var_dump($numUsers);

	if($numUsers > 0){

		$_SESSION['email'] = $email;
		//header('location:'.get_bloginfo('url').'/register');
		global $status;
		$status = "Welcome Back!";
		
	}else{
		//set status message to an error message
		global $status;
		$status = "Please enter a correct email and password";
	}

}

if(isset($_GET['logout'])){

	//logout the user
	$_SESSION['email'] = NULL;
	unset($_SESSION['email']);
	$status = "You have successfully logged out";

}

	function login() {
		global $status;
		echo '<section class="log-in">
	
		    <form class="log-in-form clearfix" action="'.$_SERVER["PHP_SELF"].'" method="post">
		    <p class="status">'.$status.'</p>
	
		        <div class="clearfix">
		        	<label>&nbsp;</label>
		            <input placeholder="Email" type="text" id="email" name="email" autofocus />
		        </div>
	
		        <div class="clearfix">
		        	<label>&nbsp;</label>
		            <input placeholder="Password" type="password" id="password" name="password" />
		        </div>
	
		        <div class="login-btn clearfix">
		        	<label>&nbsp;</label>
		            <input class="button" id="submit" type="submit" value="Sign In" />
		        </div>
	
		    </form><!-- log in form -->
	
		</section><!-- log in -->';

	};