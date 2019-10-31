<?php

$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM Students";
if ($result = mysqli_query($link, $sql)) {           //outputting the table.
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Isikukood</th>";
        echo "<th>LastName</th>";
        echo "<th>Name</th>";
        echo "<th>Grade</th>";
        echo "<th>E-mail</th>";
        echo "<th>Message</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['isikukood'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['grade'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
<form action="./index.php">
    <input type="submit" value="Back to the main" style="position: absolute; bottom: 25px;" />
</form>

<link rel="stylesheet" href="./style/style2.css">

<div class="footer" style="position: absolute; 
    bottom: 20px;
    right: 20px;">
    Create service by
    <a href="https://www.linkedin.com/in/dtjs/"><img src="img/LinkedIn_logo.png" width="20" height="20" alt="linkedIn"></a>
    Dmytro Trutenko
</div>