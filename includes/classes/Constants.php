<?php
class Constants {

	//register errors
	public static $passwordsDoNotMatch = "passwords do not match, fool";
	public static $passwordsNotAlphanumeric = "Passwords may only contain numbers and letters";
	public static $passwordCharacters = "Your password must be 5-30 characters";
	public static $emailInvalid = "Make sure it is a real email";
	public static $emailsDoNotMatch = "Your emails do not match bucko";
	public static $emailTaken = "This email has been claimed";
	public static $lastNameCharacters = "Your last name must be 1-25 characters";
	public static $firstNameCharacters = "Your first name must be 1-25 characters";
	public static $usernameCharacters = "Your username must be 5-25 characters";
	public static $usernameTaken = "This username has already been claimed";

	//login errors
	public static $loginFailed = "Username or password invalid";	

}
?>
