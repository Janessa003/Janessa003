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

    <label for = "">First Number</label>
    <input type ="text" name = "num1">
    <br>
    <label for = "">Second Number</label>
    <input type ="text" name = "num2">
    <br>
   
    <input type = "submit" name = "add" id="" value= "ADD">
    <input type = "submit" name = "sub" id="" value= "SUBTRACT">
    <input type = "submit" name = "multi" id="" value= "MULTIPLY">
    <input type = "submit" name = "div" id="" value= "DIVIDE">

</form>

<?php
  if(isset($_POST['add'])){
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $result = $number1 + $number2;
    echo "The result is: $result";
    
  } 
    
  else if(isset($_POST['sub'])){
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $result = $number1 - $number2;
    echo "The result is: $result";
  }
    
   else if(isset($_POST['multi'])){
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $result = $number1 * $number2;
    echo "The result is: $result";
   } 
    
  else if(isset($_POST['div'])){
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $result = $number1 / $number2;
    echo "The result is: $result";
  }

    ?>
</body>
</html>