<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"Welcome to user defined function<br>";
    function printline(){
        for($i=1;$i<=100;$i++){
            echo"-";
        }
    }
    printline();
    echo"<br>Good idea greated<br>";
    printline();
    echo"<br>Thank you<br>";
    printline();

    ?>
</body>
</html>