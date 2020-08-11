<?php

$myArray = [5, 10, 15, 20];

function ExistInArray($array, $count, $value) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $value) {
            return $i;
        }
    }
    return -1;
}

echo 'var_dump($myArray)';
echo "<br/>";
echo var_dump($myArray);
echo "<br/><br/>";

echo 'ExistInArray($myArray, count($myArray), 20)';
echo "<br/>";
echo ExistInArray($myArray, count($myArray), 20);
echo "<br/><br/>";


echo 'ExistInArray($myArray, count($myArray), 4)';
echo "<br/>";
echo ExistInArray($myArray, count($myArray), 4);
echo "<br/>";

?>