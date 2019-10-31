<?php


$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if ($link === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security

$isikukood = mysqli_real_escape_string($link, $_REQUEST['isikukood']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$grade = mysqli_real_escape_string($link, $_REQUEST['grade']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);


//validation

//1 
if (empty($isikukood) || empty($last_name) || empty($name) || empty($grade) || empty($email)) {
	die("ERROR: empty fields. " . mysqli_connect_error());
}
//2 
if ((strpos($email, '@') === false) || (strpos($email, '.') === false)) {
	die("ERROR: email not connect. " . mysqli_connect_error());
}
//3
if (strlen($isikukood) != 11) {
	die("ERROR: isikukood not connect. " . mysqli_connect_error());
}
//4 
function change($str)
{
	$str = strtolower($str);
	$str = ucwords($str);
	return $str;
}
function changeEmail($str)
{
	$str = strtolower($str);
	return $str;
}


$name = change($name);
$last_name = change($last_name);
$email = changeEmail($email);

//validation





// attempt insert query execution
$sql = "INSERT INTO Students (isikukood, lastname, name, grade, email, message) VALUES ('$isikukood', '$last_name', '$name', '$grade', '$email', '$message')";
if (mysqli_query($link, $sql)) {
	echo $name . " " . $last_name . " added to the database!";
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
<br>
<form action="./add.php">
	<input type="submit" value="Add more" />
</form>
<div class="footer" style="position: absolute; 
    bottom: 20px;
    right: 20px;">
	Create service by
	<a href="https://www.linkedin.com/in/dtjs/"><img src="img/LinkedIn_logo.png" width="20" height="20" alt="linkedIn"></a>
	Dmytro Trutenko
</div>