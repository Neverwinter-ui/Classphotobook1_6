<?php
session_start();
// if the user is alreay signed in, redirect them to the members_page.php page

// use the following guidelines to create the function in auth.php
// instead of using "die", return a message that can be printed in the HTML page
if(count($_POST)>0){
	// check if the fields are empty
	if(!isset($_POST['email']) die('please enter your email');
	if(!isset($_POST['password']) die('please enter your email');
	
	// check if the email is valid
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) die('Your email is invalid');
	
	// check if password length is between 8 and 16 characters
	if(strlen($_POST['password'])<8) die('Please enter a password >=8 characters');
	
	// check if the password contains at least 2 special characters
	// check if the file containing banned users exists
	// check if the email has not been banned
	// check if the file containing users exists
	// check if the email is in the database already
	// encrypt password
	// save the user in the database 
	// show them a success message and redirect them to the sign in page
}

// improve the form
?>
<form method="POST">
	<input type="email" name="email" />
	<input type="password" name="password" />
	
	<input type="submit" value="submit" />
</form>
