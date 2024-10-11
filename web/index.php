<?php

require('./conn.php');

    session_start();
    $id = $_SESSION['user_id'];
    if(!$id){
        header('location: signin.php');
        exit();
    }
    // fetch the user info from our db

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    if($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

        // free result
        mysqli_free_result($result);

        // close the connection
        mysqli_close($conn);
        
    }







?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Welcome TO Dashboard <?php echo $user['first_name'] . ' ' . $user['last_name'] ?> </h1>
<h3>Your Email is <?php echo $user['email'] ?> </h3>
<h3>Your Phone Number is <?php echo $user['phone'] ?> </h3>
<h3>Your Personal Id is (<?php echo $user['id'] ?>) </h3>

<button><a href="./logout.php">Logout</a></button>
    
</body>
</html>