<?php

    require('./conn.php');

    session_start();
    $id = $_SESSION['user_id'];

    if($id){
        header('location: index.php');
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
       

        $checkEmail = "SELECT email FROM users WHERE email = '$email' ";
        $result = mysqli_query($conn, $checkEmail);

        if(mysqli_num_rows($result) > 0){
            echo "Email already exists please login";
            exit();
        }else{
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
          $sql = "INSERT INTO users (first_name, last_name, email, phone, password) VALUES ('$first_name', '$last_name', '$email', '$phone', '$hashPassword')";
          $result = mysqli_query($conn, $sql);
          if($result){
            header('location: signin.php');
            exit();
          }else{
            echo 'Error: '. mysqli_error($conn);
            exit();
          }
           
        }

        // $sql = "INSERT INTO users (first_name, last_name, email, phone, password) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password')";
        // $result = mysqli_query($conn, $sql);
      
    }





?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    

    <form action="" method="POST">
        <div>
             <input type="text" placeholder="Enter Your First Name" name="first_name" >
        </div>  
        <div>
            <input type="text" placeholder="Enter Your Last Name" name="last_name">
        </div>     
        <div>
            <input type="email" placeholder="Enter YOur Email" name="email">
        </div>
        <div>
            <input type="phone" placeholder="Enter YOur Phone Number" name="phone">
        </div>
       <div>
         <input type="password" placeholder="Enter YOur password" name="password">
       </div>
        <button>Submit</button>
    </form>


    
</body>
</html>