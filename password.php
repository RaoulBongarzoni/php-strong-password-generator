<?php

$pswdSourceString = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890,;.:-_?=/&%£!$";

$lenght = $_GET["pswdLenght"] ?? false;
$arrRepetitions = $_GET["pswdRepetitionsFalse"] ?? $_GET["pswRepetitionTrue"];
$options = [
    "letters" => $_GET["letters"] ?? true,
    "numbers" => $_GET["numbers"] ?? false,
    "symbols" => $_GET["symbols"] ?? false
];


function generateLenghtArray($len, $repetitions)
{
    $pswdSourceString = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $pswdArraySource = str_split($pswdSourceString);
    $pswdArray = [];

    if ($repetitions == false) {

        for ($i = 0; $i <= $len; ++$i) {

            $thisChar = $pswdArraySource[rand(0, sizeof($pswdArraySource))];

            if (in_array($thisChar, $pswdArray)) {
                --$i;
            } else {

                array_push($pswdArray, $thisChar);
            };
        };
    } else {
        for ($i = 0; $i <= $len; ++$i) {
            array_push($pswdArray, $pswdArraySource[rand(0, sizeof($pswdArraySource))]);
        };
    }

    return implode($pswdArray);
};

/* function generateArray($options)
{
    $sourceLetters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $sourceNumbers = "1234567890";
    $sourceSymbols = ",;.:-_?=/&%£!$";
    $sourceArray = [];
    if ($options[0] == true) {
        $sourceArray = array_merge($sourceArray, str_split($sourceLetters));
    }
    if ($options[1] == true) {
        $sourceArray = array_merge($sourceArray, str_split($sourceNumbers));
    }
    if ($options[2] == true) {
        $sourceArray = array_merge($sourceArray, str_split($sourceSymbols));
    }

    return $sourceArray;
};

function generatePassword($lenght, $repetitions, $source)
{
};
 */



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

            echo generateLenghtArray($lenght, $arrRepetitions)

            ?> </h1>

</body>

</html>