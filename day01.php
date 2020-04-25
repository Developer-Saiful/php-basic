<?php
echo "Hello Saiful Islam.You are a awsome programmer";
//nested array
$foods=[
    'vegetables'=>explode(', ','Brinjal, Brocolli, Carrot, Capsicm'),
       'fruits'=>explode(', ','Mango,Banana,Apple'),
       'drinks'=>explode(', ','Water,Milk,Juice'),
       
];
print_r($foods);
// array_push($foods['drinks'],'Malta Juice');
// print_r($foods);
echo $foods['vegetables'][3];
$sample2=[
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[5,6,7]],

];
print_r($sample2);echo"</br>";
echo $sample2[3][3][1];
// $cars = array
//   (
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover",17,15)
//   );
  
// echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
// echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
// echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
// echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

$cars=array
(
    array("Volvo",22,15),
    array("BMW",15,13),
    array("Land Rover",17,15),
    array("Saab",5,2)

);
echo $cars[0][0].": In Stock Now: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In Stock Now: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In Stock Now: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In Stock Now: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
  $myarray = array( 
      
    // Default key for each will 
    // start from 0 
    array("Ankit", "Ram", "Shyam"), 
    array("Unnao", "Trichy", "Kanpur") 
); 
      
// Display the array information 
print_r($myarray); 
$cars = array(
    array(
        "name"=>"Urus", 
        "type"=>"SUV", 
        "brand"=>"Lamborghini"
    ),
    array(
        "name"=>"Cayenne", 
        "type"=>"SUV", 
        "brand"=>"Porsche"
    ),
    array(
        "name"=>"Bentayga", 
        "type"=>"SUV", 
        "brand"=>"Bentley"
    ),
);
// array traversal
// find size of the array
$size = count($lamborghinis);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    foreach($cars[$i] as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
    echo "\n";
}
