<?php
    require 'connection.php';

    $errors = ['title'=> '', 'author'=> '', 'content'=> ''];

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    if(empty($title)){
        $errors['title'] = 'Title is required';
    }else if(empty($author)){
        $errors['author'] = 'Author is required';
    }else if(empty($content)){
        $errors['content'] = 'Content is required';
    }else{

        $sql = "INSERT INTO Blog (title, author, content) VALUES ('$title', '$author', '$content')";
        $result  = mysqli_query($conn, $sql);
        if($result){
            header('location: index.php');
            exit();
        }else{
            echo 'Error: '. mysqli_error($conn);
            exit();
        }
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


    <!-- <?php include 'navbar.php';?> -->

  <form action="CreateBlog.php" method="post">
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo $title ?>"  >
        <p style="color: red;"><?php echo htmlspecialchars($errors['title']) ?></p>
    </div>
    <div>
        <label for="author">Author</label>
        <input type="text" name="author" value="<?php echo $author ?>" >
        <p style="color: red;"><?php echo htmlspecialchars($errors['author']) ?></p>

    </div>
   <div>
    <label for="content">Content</label>
    <textarea name="content" ><?php echo htmlentities($content) ?></textarea>
        <p style="color: red;"><?php echo htmlspecialchars( $errors['content']) ?></p>


   </div>
    <button type="submit">Submit</button>
  </form>

    <!-- <?php include 'footer.php' ?> -->
    
    
</body>
</html>