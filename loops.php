<?php
    $fruilts = ['Apple', 'Banana', 'Cherry'];

    // echo $fruilts[0];
    // echo $fruilts[1];
    // echo $fruilts[2];

    // for looop

    // $num = 10;

    // for($i = 0; $i < $num; $i++){
    //     echo $i . '<br/>';
    // }


    // for($i = 0; $i < count($fruilts); $i ++ ){
    //     // echo $i . '<br/>';
    //     echo $fruilts[$i] . '<br/>';
    // }

    // foreach loop

    // foreach($fruilts as $elem  ){
    //     echo $elem . '<br/>';
    // }


$people = [
    ['name'=> 'oslim', 'age'=> 40, 'city'=> 'San Francisco', 'hobbies'=> ['reading', 'painting', 'cooking'] ],
    ['name'=> 'tayo', 'age'=> '30', 'city'=> 'lagos', 'hobbies'=> ['reading', 'painting']],
    ['name'=> 'Arise', 'age'=> '33', 'city'=> 'abeokuta', 'hobbies'=> ['reading', 'painting']],
    ['name'=> 'Ehimen', 'age'=> '35', 'city'=> 'Ibadan', 'hobbies'=> ['reading', 'painting']],

];


// echo count($people)

// for($i = 0; $i < count($people); $i++){
//     // echo $people[$i]['name'] . '</br>';
//     // echo $people[$i]['city'] . '<br/>';
//     // echo $people[$i]['hobbies'][0] . '<br/>';

//     echo $people[$i]['name'] . ' - ' . $peopl[$ei]['city'] . ' - ' . $people[$i]['hobbies'][0] . '</br/>' ;
// }


// foreach($people as $person){
//     echo $person['name']. '- '. $person['city']. '- '. $person['hobbies'][0]. '</br/>' ;
// }





?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach($people as $person) { ?>
       <div style="border: 1px solid green; margin: 10px 0;">
         <h1><?php echo $person['name'] ?></h1>
        <h3><?php echo $person['city'] ?></h3>
        <p><?php echo $person['age'] ?></p>
        <?php foreach($person['hobbies'] as $hob){ ?>
            <span style="background-color: green; border-radius: 20%; color: white; padding: 10px;"><?php echo $hob ?></span>

            <?php } ?>

       </div>
    <?php } ?>
    
</body>
</html>