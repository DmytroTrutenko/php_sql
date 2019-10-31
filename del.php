<?php

$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "DELETE FROM Students";         //clear the table.

if (mysqli_query($link, $sql)) {
    echo "The table is cleared.";
} else {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Close connection
mysqli_close($link);
?>
<form action="./index.php">
    <input type="submit" value="Back to the main" style="position: absolute; bottom: 25px;" />
</form>
<div class="footer" style="position: absolute; 
    bottom: 20px;
    right: 20px;">
    Create service by
    <a href="https://www.linkedin.com/in/dtjs/"><img src="img/LinkedIn_logo.png" width="20" height="20" alt="linkedIn"></a>
    Dmytro Trutenko
</div>