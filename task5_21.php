<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="number" id="" placeholder = "input numbers">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["number"];
    if(!is_numeric($number)){
        echo "The input must be a number <br>";
    
   
    }
    if($number%2 === 0){
        echo $number ."  is even number <br>";
    }
    else{
        echo $number ." is odd number <br>"; 
    }
    if($number > 0){
        echo $number."  is positive number <br>";
    }
    elseif($number < 0){
        echo $number ."  is negative <br>";
    }
    else{
        echo $number ." is 0 <br>";
    }


}
?>