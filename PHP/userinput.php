<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action = "userinput.php" method = "get">
        Name: <br><input type="text" name = "name">
        <br>
        <input type = "submit" name = "Submit">
        <br>
        Your name is <?php echo $_GET["name"]; ?>
</body>
</html>