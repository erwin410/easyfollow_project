<?php
session_start(

);

include('connexions.php');

 

if ($stmt = $db->prepare('SELECT id, password FROM users WHERE email =?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	
// if ($_POST['password'] === $password) {
if (password_verify($_POST['password'], $password)) {  // use BCRYPT
		// Verification success! User has logged-in!
		// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['id'] = $id;
		echo 'Bienvenue ' . $_SESSION['email'] . '!';
		header('Location: ./index.php');
	} else {
		// Incorrect password
		echo 'Password incorrect!';
	}
} else {
	// Incorrect username
	echo 'Username  Incorrect';
}

	$stmt->close();
}

?>