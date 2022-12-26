<?php
$fruits = ["りんご" => "150","みかん" => "50","もも" => "500"];

$number = ["2","3","6"];

function getPrice($fruits, $number){
    $value = $fruits * $number;
    return $value;
}
$i = 0;

foreach($fruits as $key => $value){
    echo $key."は".getPrice($value,$number[$i])."円です。";
    echo '<br>';
    $i++;
}
?>