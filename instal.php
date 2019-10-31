<?php

$link = mysqli_connect("localhost", "root", "");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Create database
// Attempt create database query execution
$sql = "CREATE DATABASE demo";
if (mysqli_query($link, $sql)) {
    echo "Database created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
<br>
<?php

$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Create table
// Attempt create table query execution    
$sql = "CREATE TABLE Students                      
(
  isikukood varchar(11) NOT NULL ,
  lastname  char(20)  NOT NULL ,  	
  name      char(20)  NOT NULL ,  
  grade     int       NOT NULL ,
  email     char(20)  NOT NULL ,
  message   char(250) NULL ,
  CONSTRAINT PK_Students  PRIMARY KEY (isikukood)
)";

if (mysqli_query($link, $sql)) {
    echo "Table created successfully.";
} else {
    echo "Table with that name has already been created";
}

// Close connection
mysqli_close($link);
?>
<br>
<?php

$link = mysqli_connect("localhost", "root", "");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);



// Close connection
mysqli_close($link);
?>

<form action="./index.php">
    <input type="submit" value="Back to the main" style="position: absolute; bottom: 25px;" />
</form>