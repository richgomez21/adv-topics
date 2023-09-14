<?php
$person = ["name" => "Bob"];
echo($person['name']);

if(isset($person['age'])){
    echo("IS SET");
}else{
    echo("IS NOT SET");
}

$x = "";

if(empty($x)){
    echo("EMPTY");
}else{    
    echo("NOT EMPTY");
}

?>