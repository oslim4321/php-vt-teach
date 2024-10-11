<?php
    session_start();
    require('./conn.php');

    $id = $_SESSION['user_id'];
    if($id){
        header('location: index.php');
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        // check if the email exists in our database
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
           
            // check if the password they enter is correct with t{he one in ourr db
            if(password_verify($password, $user['password'])){
                $_SESSION['user_id'] = $user['id'];
                header('location: index.php');
            }else{
                echo 'Email or Password is incorrect';
                exit();
            }

        }else{
            echo 'Email or Password is incorrect';
            exit();
        }
        


    
    }




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>




    <form action="" method="POST">
      <div>
            <input type="email" placeholder="Enter YOur Email" name="email">
        </div>
      
       <div>
         <input type="password" placeholder="Enter YOur password" name="password">
       </div>
        <button>Submit</button>
    </form>

</body>
</html>