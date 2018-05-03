<?php
$NumberOfColors = $_POST('number');

function random_num(){
    $t = random_int(1, 1000);
    return $t;
}

if(is_int($NumberOfColors)){
    $payload = array();
    $i = 1;
    while($i <= $NumberOfColors){
        $tempnum = null;
        $i++;
        $tempnum = random_num();
        array_push($payload, $tempnum);
    }
    echo json_encode($payload);
}








?>