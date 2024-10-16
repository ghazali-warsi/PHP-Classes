<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // indexed array

    $arr =['Manzar', 'manzar@gmail.com', '03128786' , 18 ];

    // print_r($arr);
//    echo $arr[0];
// echo count($arr);
for($x=0; $x<count($arr);$x++)
{
//   echo $x . " => " .  $arr[$x] .  "<br>";

}


// Associative Array

$arr_2 = [
    [
    'name'=>'Umer',
    'email'=>'umer@gmail.com',
    'contact'=>876465641,
    'Age'=>19
    ],
    [
        'name'=>'Umer',
        'email'=>'umer@gmail.com',
        'contact'=>876465641,
        'Age'=>19
        ]
        ,[
            'name'=>'Umer',
            'email'=>'umer@gmail.com',
            'contact'=>876465641,
            'Age'=>19
        ],
        [
            'name'=>'Umer',
            'email'=>'umer@gmail.com',
            'contact'=>876465641,
            'Age'=>19
            ]

];

foreach ($arr_2 as $key => $value) {
    // echo $key."<br>";
    // echo $key . " => " . $value."<br>";
}

$arr_3 = 
[
['Manzar', 'manzar@gmail.com', '03128786' , 18 ],
['Manzar', 'manzar@gmail.com', '03128786' , 18 ],
['Manzar', 'manzar@gmail.com', '03128786' , 18 ],
['Manzar', 'manzar@gmail.com', '03128786' , 18 ],
['Manzar', 'manzar@gmail.com', '03128786' , 18 ]
];


// echo count($arr_3);
$num = array_keys($arr_3);
// echo $num;
// print_r($num);
// $arr_3.length

for($y=0; $y<count($arr_3);$y++)
{
// echo $arr_3[$y];
// echo 'the value of outer loop' . $y . "<br>";
for($x=0;$x<count($arr_3);$x++)
{
    // echo  $arr_3[$y][$x] . "<br>";
}
}

foreach($arr_3 as $item)
{
  foreach ($item as $key => $value) {
    // echo $value . "<br>";
  }
}

$array_names = 
[
    "Faiz","Manzar","Ebad","Umer","Habib"
];
echo "<pre>";
print_r($array_names);

echo "</pre>";
array_push($array_names,"Hammad","Kamal","Bilal");
echo "<pre>";
print_r($array_names);

echo "</pre>";
array_pop($array_names);
echo "<pre>";
print_r($array_names);

echo "</pre>";


array_splice($array_names , -3);
echo "<pre>";
print_r($array_names);

echo "</pre>";



    
    ?>
</body>
</html>