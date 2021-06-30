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
   $choice=1;
   switch($choice)
   {
       case 1:echo"You selected 1st choice";
       break;
       case 2:echo"You selected 2nd choice";
       break;
       default: echo"Wrong choice";
   }
   ?> 
</body>
</html>