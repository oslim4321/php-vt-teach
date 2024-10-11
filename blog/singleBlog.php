<?php
require './connection.php';


if(isset($_POST['delete'])){
    $id = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql = "DELETE FROM Blog WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: index.php');
        exit();
    }else{
        echo 'Error: '. mysqli_error($conn);
        exit();
    }

}

$id = mysqli_real_escape_string($conn, $_GET['id']);
if(!empty($id)){
    $sql = "SELECT * FROM Blog Where id = $id";
    $result = mysqli_query($conn, $sql);
    $blog = mysqli_fetch_assoc($result);

    // if(!$blog){
    //     echo 'NO BLOG WITH THIS ID';
        
    // }
    // free result 
    mysqli_free_result($result);

    // close connection
    // mysqli_close($conn);

}

if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn, $_POST['id_to_update']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);


    $sql = "UPDATE Blog SET title='$title', author='$author', content='$content' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: index.php');
        exit();
    }else{
        echo 'Error: '. mysqli_error($conn);
        exit();
    }
}




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIngle blog</title>
</head>
<body>



<h2><?php echo $blog['title'] ?></h2>
<h3><?php echo $blog['content'] ?></h3>
<h4><?php echo $blog['author'] ?></h4>


 <form action="singleBlog.php?id=<?php echo $id ?>" method="post">
    <input type="hidden" name="id_to_update" value="<?php echo $blog['id'] ?>" >
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($blog['title']) ?>"  >
    </div>
    <div>
        <label for="author">Author</label>
        <input type="text" name="author" value="<?php echo htmlspecialchars($blog['author']) ?>" >

    </div>
   <div>
    <label for="content">Content</label>
    <textarea name="content" ><?php echo htmlentities($blog['content']) ?></textarea>


   </div>
    <button type="submit" name="update" >Submit</button>
  </form>



  <form action="singleBlog.php" method="POST">
    <input type="hidden" name="id_to_delete" value="<?php echo $id ?>" >
    <button name='delete' style="background-color: red; color: white;" >Delete Blog</button>
  </form>

</body>
</html>