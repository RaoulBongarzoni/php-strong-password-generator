<?php

$lenght=$_GET["pswdLenght"] ?? false;
$arrRepetitions=$_GET["pswdRepetitions"] ?? false;
$options=[
    "letters" =>$_GET["letters"] ?? true,
    "numbers" =>$_GET["numbers"] ?? false,
    "symbols" =>$_GET["symbols"] ?? false
];




function generateArray($options){
    $sourceLetters="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $sourceNumbers="1234567890";
    $sourceSymbols=",;.:-_?=/&%£!$";
    $sourceArray=[];
    if ($options[0]==true){
        $sourceArray = array_merge($sourceArray, str_split($sourceLetters));
    }
    if ($options[1]==true){
        $sourceArray = array_merge($sourceArray, str_split($sourceNumbers));
    }
    if ($options[2]==true){
        $sourceArray = array_merge($sourceArray, str_split($sourceSymbols));
    }

    return $sourceArray;

};

function generatePassword($lenght, $repetitions, $source)
{
    

};




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1> <?php 
    $test=generateArray($options);
    foreach ($element as $test){
        echo $element;
    };

?> </h1>
    
</body>
</html>