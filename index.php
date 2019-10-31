<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_BD</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container">
        <h1>Task BD</h1>

        <form action="./instal.php">
            <input type="submit" value="Create Table" />
        </form>
        <h2> If the table is created then add data to the table</h2>
        <form action="./add.php">
            <input type="submit" value="Add Data" />
        </form>
        <h2>If you have added data, you can see the table</h2>
        <form action="./view.php">
            <input type="submit" value="View Table" />
        </form>
        <h2>If the table is not needed, it can be cleared</h2>
        <form action="./del.php">
            <input type="submit" value="Cleared table" />
        </form>
    </div>

    <div class="footer" style="position: absolute; 
    bottom: 20px;
    right: 20px;">
        Create service by
        <a href="https://www.linkedin.com/in/dtjs/"><img src="img/LinkedIn_logo.png" width="20" height="20" alt="linkedIn"></a>
        Dmytro Trutenko
    </div>
</body>

</html>