<?php


    $conn = mysqli_connect('localhost', 'test', '12345678', 'oslim-blog' );
    if(!$conn){
        die('Connection failed: '. mysqli_connect_error());
    }


?>