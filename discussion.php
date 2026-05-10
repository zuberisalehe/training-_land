<?php
echo "<h1>ARRAY</h1>";
$shule=["darasa la 1","darasa la 2","darasa la 3","darasa la 4","darasa la 5","darasa la 6"];
foreach($shule as $darasa){
    echo $darasa."<br>";
}
// Indexed array
$colors = ['Red', 'Green', 'Blue'];
echo $colors[0]; // Red
echo count($colors); // 3
 echo'<br>';
echo "<h1>Associative array (key => value)(it like a dictionary)</h1>";
echo "<br>";

$student = [
'name' => 'Alice',
'age' => 21,
'grade' => 'A',
'score' => 95.5
];
echo $student['name']."<br>"; // Alice
echo $student['score']; // 95.5
// Adding & removing elements
$colors[] = 'Yellow'; // append
array_push($colors, 'Purple'); // append
$removed = array_pop($colors); // remove last
$first = array_shift($colors); // remove first
array_unshift($colors, 'Pink'); // prepend

//array function    
