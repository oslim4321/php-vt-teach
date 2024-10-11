<?php 
    // echo 'hello world'


    function logger($message){
        echo $message . '</br>';
        // echo "$message </br";
    };

    // $name = 'oslim123';

    // if($name === 'oslim'){
    //     logger('name is oslim');
    // }else if($name === 'selim'){
    //     logger('name is selim');
    // }else{
    //      logger('name is not oslim or selim');
    // }


    // $age = 17;

    // if($age > 18){
    //     logger('age is over 18');
    // }else if($age < 18){
    //     logger('age is less than 18');
    // }else{
    //     logger('age is equal to 18');
    // }



    // $age = 25;
    // $is_student = true;

    // if($age >= 18){
    //     if($is_student){
    //         echo 'you are an adult and a student';
    //     }else{
    //         echo 'you are an adult but not a student';
    //     }

    // }else{
    //     echo 'you are minor';
    // }

    $age = 10;
    $is_american_citizen = true;

    if($age >= 18 || $is_american_citizen ){
        echo 'you can enter our page';
    }else{
        echo 'you cannot enter our page';
    }




?>