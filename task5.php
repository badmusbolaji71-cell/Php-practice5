<?php
// question 18
$nameerror = $Lnameerror =$emailerror = $formerr="";
$name = "";

// if($_SERVER["REQUEST_METHOD"] == "GET"){
//     $name = $_GET["name"];
// }
// question 19
if(isset($_POST["submit"])){
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $firstname = $_POST["first_name"];
     $lastname = $_POST["last_name"];
      $email = $_POST["email"];
     
    if(
        empty($firstname) || empty($lastname) || empty($email)
    ){
        echo "Fill all necessary places";
    }else{
        echo "All field filled";
    }




if(empty($firstname)){
    $nameerror  = "Input first name";
}
if(empty($lastname)){
    $Lnameerror  = "Input last name";
}
if(empty($email)){
    $emailerror  = "Input email";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
     $emailerror = "Invalid email format, should be written in (example@gmail.com)";
}    

}
};

?>
<!-- <!DOCTYPE html> -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method="GET">
    <input type="text" name="name" id="" placeholder = "Name">
    <input type="submit" value="submit">
    </form> -->
<!-- question 19 -->
    <form action="welcome.php" method="post" name = "form">
        <input type="text" name="first_name" id="" placeholder = "First name">
        <p><?php echo $nameerror?></p>
        <input type="text" name="last_name" id="" placeholder = "Last name">
        <p><?php echo $Lnameerror?></p>
        <input type="email" name="email" id="" placeholder = "Email">
        <p><?php echo $emailerror?></p>
        <p><?php echo $formerr?></p>
         <input type="submit" value="submit">

    </form>
</body>
</html>
