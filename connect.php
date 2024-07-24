<?php
    $username = $_POST['$username'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw2 = $_POST['psw2'];

     //Database Connection

     $conn = new mysqli('localhost', 'root','','kejani_test');
     if ($conn->connect_error) {
        die('connection Failed : '. $conn->connect_error);
      } else{
            $stmt = $conn->prepare(" insert into registration(username,email,psw,psw2) values(?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $email, $psw, $psw2);
            $stmt->execute();
            echo "Registration Successful ...";
            $stmt ->close();
            $conn->close();
        }
?>