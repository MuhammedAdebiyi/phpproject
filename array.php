<?php
function echoo($value){
    echo $value."<br>"; 
}
 $cars = ['Benz', ' Volvo', 'Toyota ', 'Mazdda'];
for ($i=0; $i < count($cars); $i++) { 
    echoo($cars[$i]);
}
"<br>";
$person = ['name'=>"Sunday Micheal", 'age'=> 20, 'complextion'=>"yellow"];
foreach ($person as $key => $value) {
   echoo($key. "=>".$value);
}
print_r($person);
?>

