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
   $total=360;
$per=$total/500*100;

if($per>=90)
echo"Grade-A";
elseif($per>=70 && $per<89)
echo"Grade -B";
elseif($per>=50 && $per<69)
echo"Grade -c";
else
echo"Grade -Fail";
   ?> 
</body>
</html>