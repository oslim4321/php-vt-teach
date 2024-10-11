<?php   
    require 'connection.php';


    $sql = "SELECT * FROM Blog";
    $result = mysqli_query($conn, $sql);

    if($result){
        $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
         
        // free the result
        mysqli_free_result($result);

        // close the connection
        mysqli_close($conn);

    }else{
        echo  'Query Err' . mysqli_error($conn);
    }


   


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<div>
    <!-- <?php include 'navbar.php' ?> -->

    <a href="./CreateBlog.php"> <button>Create Blog</button></a>
</div>

 <div>
       <?php foreach ($blogs as $blog) { ?>
        <div style="border:  1px solid black;">
            <h1><a href="./singleBlog.php?id=<?php echo $blog['id'] ?>"> <?php echo $blog['title'] ?> </a></h1>
            <h3> <?php echo $blog['author'] ?> </h3>
            <h5> <?php echo $blog['content'] ?> </h5>
        </div>
      
    <?php } ?>
 </div>



   <!-- <?php include 'footer.php' ?> -->
</body>
</html>



<!-- Assignme 

Number Guessing Game
Objective: Build a number Guessing game where the computer
pick a random number betwen 1 and 100 and the user  has to guess the number
provde  hint (higher or lower) base on the user input


key concept: loops (while loop), conditional statement (if, statement) random number
generation -->
<!-- 
<script>
    window.location = 'https://dash-test.trivoh.com/dashboard'
</script> -->