<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Database Connection</title>
</head>
<body>

   <?php
   //servername=localhost
   //username=root
   //password=empty
   //database name=user (created on phpmyadmin)


   //create connection
   $conn = mysqli_connect("localhost","root","","user");

   //check connection
   if($conn === false){
      die("ERROR: Could not connect" .mysqli_connect_error());
   }

   //taking values from the contact form data(input)
   $fullName = $_REQUEST['full_name'];
   $email = $_REQUEST['email'];
   $message = $_REQUEST['message'];

   //performing insert query execution (here our table name is contact)
   $sql = "INSERT INTO user_information VALUES ('$fullName', '$email', '$message')";

   if(mysqli_query($conn, $sql)){
      header("Location:thankyou-page.html");
   }

   else{
      echo "ERROR: Sorry ccould not send $sql." .mysqli_error($conn);
   }


   //close connection
   mysqli_close($conn);


   ?>

</body>
</html>