<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action = "" method = "post">

<input type = "submit" name = "mon"  value= "Monday">
<input type = "submit" name = "tues" value= "Tuesday">
<input type = "submit" name = "wed"  value= "Wednesday">
<input type = "submit" name = "thurs" value= "Thursday">
<input type = "submit" name = "fri"  value= "Friday">
<input type = "submit" name = "sat"  value= "Saturday">
</form>
<?php
if(isset ($_POST['mon'])){
    echo "Monday";
}
else if(isset($_POST['tues'])){
    echo "Tuesday";
}
else if(isset($_POST['wed'])){
    echo "Wednesday";
}
else if(isset($_POST['thurs'])){
    echo "Thursday";
}
else if(isset($_POST['fri'])){
    echo "Friday";
}
else if(isset($_POST['sat'])){
    echo "Saturday";
}
?>
</body>
</html>