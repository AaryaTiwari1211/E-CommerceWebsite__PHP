<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $name = "Aarya";
        $age = 19;

        echo("Hello World");//Hello World Code
        echo("<br>");//break tag
        echo("<h1>This will be my new E-Commerce Website</h1>");//using header in html

        echo("My Name is $name...");//Hello World Code
        echo("<br>");//break tag
        echo("<h1>I am $age years old!! </h1>");//using variables in PHP

        $phrase = "Yes this is a phrase..";//string variable
        $year = 2003;//integer variable
        $cgpa = 76.8;//floating point variable
        $isMale = true; //boolean variable
        $hey = NULL;// NULL variable

        echo("<h2>$phrase</h2>");
        echo("<h2>$year</h2>");
        echo("<h2>$cgpa</h2>");

        // Working with strings
        $phrase1 = "Hey this is a String";
        echo strtolower($phrase1);//All to 
        echo("<br>");//break tag
        echo strtoupper($phrase1);//All to uppercase
        echo("<br>");//break tag
        echo strlen($phrase1);//Length of string
        echo("<br>");//break tag
        echo ($phrase1[4]);//4th index of the string
        echo("<br>");//break tag
        str_replace("String","Aarya",$phrase1)

        // Working with Numbers
        echo(5+9);//Addition
        echo(5-9);//Subtraction
        echo(5*9);//Multiplication
        echo(5/9);//Division
        echo(10%3);//Modulus
        
        ?>
</body>
</html>