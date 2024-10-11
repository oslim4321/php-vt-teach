<?php 
// echo 'array class'


// 3 types of arrays in php 

// index array

$names = ['oslim', 'tayo', 'arise', 'Ehimen', 'abisola' ];
$carrer = ['web dev', 'ui ux', 'tester'];
// echo $names;

// print_r($names);
// echo $names[2];

// echo count($names)

// $names[4] = 'SQI';

// array_push($names, 'SQI');
// array_pop($names);


// $newArray = array_merge($names, $carrer);
// print_r($newArray)



// associative array

$person = [
    'name'=> 'oslim',
    'age'=> 36,
    'city'=> 'lagos',
    'isMarried'=> true
];

// print_r($person)
// echo $person['isMarried']

// $person['age'] = 'coding';

// print_r($person)


// $person = [
//     'name' => 'oslim',
//     'age' => 25,
//     'city' => 'Lagos',
//     'hobbies' => ['reading', 'painting', 'cooking']
// ];



// multidimensional array

$people = [
    ['name'=> 'oslim', 'age'=> 40, 'city'=> 'San Francisco', 'hobbies'=> ['reading', 'painting', 'cooking'] ],
    ['name'=> 'tayo', 'age'=> '30', 'city'=> 'lagos', 'hobbies'=> ['reading', 'painting']],
    ['name'=> 'Arise', 'age'=> '33', 'city'=> 'abeokuta', 'hobbies'=> ['reading', 'painting']],
    ['name'=> 'Ehimen', 'age'=> '35', 'city'=> 'Ibadan', 'hobbies'=> ['reading', 'painting']],

];


// print_r($people[0]['name']);

// echo $people[0]['city']

$people[4] = ['name'=> 'abisola', 'age'=> 40, 'city'=> 'San Francisco', 'hobbies'=> ['reading', 'painting']];
array_push($people, ['name'=> 'SQI', 'age'=> 20, 'city'=> 'ogbomosho', 'hobbies'=> ['coding', 'teaching'] ] );
print_r($people)


?>

<!-- <script>
    // let obj = {name: 'oslim', age: 40,}
    let people = [
        {name: 'oslim', age: 40,},
        {name: 'oslim', age: 40,},
        {name: 'oslim', age: 40,}
    ]
</script> -->