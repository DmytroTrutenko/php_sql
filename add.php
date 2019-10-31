<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Records Form</title>

</head>

<body>
    <div class="wrapper" style="margin-left: 200px; border: solid black 1px; padding: 10px; margin-top: 20px; width : 200px; height 100px; background-color: rgb(224, 247, 239);">
        <h1>Add Data in table Students</h1>
        <form action="insert.php" method="post">
            <p>
                <label for="isikukood">Isikukood:</label>
                <input type="text" name="isikukood" id="isikukood">
            </p>
            <p>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname">
            </p>
            <p>
                <label for="name">First Name:</label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="grade">Grade:</label>
                <input type="number" name="grade" id="grade">
            </p>
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="message">Message:</label>
                <input type="text" name="message" id="message">
            </p>
            <input type="submit" value="Add Records">
            <input type="reset" value="Cancel">
        </form>

    </div>
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

</body>

</html>