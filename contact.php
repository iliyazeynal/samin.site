<?php
	if (isset($_POST['register'])) {
        $name=$_POST['name'];
          $email=$_POST['email'];
          $password=md5($_POST['password']);
          $message=$_POST['message'];
        
        mysqli_query($db,"INSERT INTO user (name,family,email,password) VALUES ('$name','$email','$password','$message')");
        echo "Registration was successful";
       
    
        }
?>