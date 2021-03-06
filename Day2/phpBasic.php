<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY 2 Assignments</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <button><a href="../">Back to Homepage</a></button>
    <h1>PHP DAY 2 Assignments</h1>
    <h4>Developed by: Sourav Mondal, Roll: 2082017</h4>
    <a style="color:red;" href="PHPCode.txt">
        <h3>Click here for PHP Codes</h3>
    </a>
    <br><br>
    <?php

    echo "<b>1. Create an array that associates student names with their heights. Print the array using foreach
    loop. Also print the results after each of the following sorting<br>
    a) ascending order by student name<br>
    b) ascending order by height<br>
    c) descending order by student name<br>
    d) descending order by height</b><br><br>";

    $studentArr = array(
        array('name' => 'Sourav', 'height' => 1.7),
        array('name' => 'Avik', 'height' => 1.75),
        array('name' => 'Rakesh', 'height' => 1.86),
        array('name' => 'Rohit', 'height' => 2.1),
        array('name' => 'Bijoy', 'height' => 1.5),
        array('name' => 'Pankal', 'height' => 1.56),
        array('name' => 'Anik', 'height' => 1.55),
    );

    echo "a) Printing Array in Ascending order by student name: <br><br>";
    $keys = array_column($studentArr, 'name');
    array_multisort($keys, SORT_ASC, $studentArr);
    foreach ($studentArr as $key => $value) {
        echo "Name: " . $value['name'] . ", Height: " . $value['height'] . '<br>';
    }

    echo "<br>b) Printing Array in Ascending order by student height: <br><br>";
    $keys = array_column($studentArr, 'height');
    array_multisort($keys, SORT_ASC, $studentArr);
    foreach ($studentArr as $key => $value) {
        echo "Name: " . $value['name'] . ", Height: " . $value['height'] . '<br>';
    }

    echo "<br>c) Printing Array in Descending order by student name: <br><br>";
    $keys = array_column($studentArr, 'name');
    array_multisort($keys, SORT_DESC, $studentArr);
    foreach ($studentArr as $key => $value) {
        echo "Name: " . $value['name'] . ", Height: " . $value['height'] . '<br>';
    }

    echo "<br>d) Printing Array in Descending order by student height: <br><br>";
    $keys = array_column($studentArr, 'height');
    array_multisort($keys, SORT_DESC, $studentArr);
    foreach ($studentArr as $key => $value) {
        echo "Name: " . $value['name'] . ", Height: " . $value['height'] . '<br>';
    }

    echo '<br><br>';

    echo "<b>2. Reverse an array.</b>";

    $namesArray = array("Sourav", "Avik", "Raja", "Manoj");

    echo "<br><br>Printing before reverse effect<br>";
    print_r($namesArray);

    $namesArray = array_reverse($namesArray);

    echo "<br><br>Printing after reverse effect<br>";
    print_r($namesArray);

    echo '<br><br>';

    echo "<b>3. Add an element to the end of an array, and delete the last element from an array.</b>";

    $stationArray = array("India", "USA", "Australia");

    echo "<br><br>Printing initial array<br>";
    print_r($stationArray);

    echo "<br><br>Adding 'Germany' to the end of the array<br>";
    array_push($stationArray, 'Germany');
    print_r($stationArray);

    echo "<br><br>Deleting last element of the array<br>";
    array_pop($stationArray);
    print_r($stationArray);

    echo '<br><br>';

    echo "<b>4. Add an element at the beginning of an array, and delete the first element from an array.</b>";

    $cardModelArr = array("Honda", "Ferrari", "Mercedes");

    echo "<br><br>Printing initial array<br>";
    print_r($cardModelArr);

    echo "<br><br>Adding 'Tesla' at the beginning of the array<br>";
    array_unshift($cardModelArr, 'Tesla');
    print_r($cardModelArr);

    echo "<br><br>Deleting first element of the array<br>";
    array_shift($cardModelArr);
    print_r($cardModelArr);

    echo '<br><br>';

    echo "<b>5. Insert a new element in an array in any specified position.</b>";

    $numberArray = array('1', '2', '3', '4', '5');

    echo '<br><br>Printing initial array :<br>';
    print_r($numberArray);
    $value = '80';

    $position = 4;

    array_splice($numberArray, $position, 0, $value);

    echo "<br><br>After inserting 80 in the array at position 4:<br>";
    print_r($numberArray);

    echo '<br><br>';

    echo "<b>6. Count the total number of times a specific value appears in an array.</b>";

    $numberArray = array(12, 23, 12, 4, 12, 5, 56, 912, 12, 0);

    echo '<br><br>Printing initial array :<br>';
    print_r($numberArray);

    echo '<br><br>Count of occurence of 12 in the array: ';
    $indexes = array_keys($numberArray, 12); //array(0, 1)
    echo count($indexes);

    echo '<br><br>';

    echo "<b>7. Remove duplicate values from an array.</b>";

    $carNumArr = array("WB40S 0069", "JH40S 7769", "WB40S 0069", "JH40S 7769", "OD60AQ 1234", "TN07LS 7425");

    echo '<br><br>Printing initial array :<br>';
    print_r($carNumArr);

    echo '<br><br>After removing redundant values from array :<br>';
    $carNumArr = array_unique($carNumArr);
    print_r($carNumArr);

    echo '<br><br>';

    echo "<b>8. Remove specific elements from an array.</b>";

    $departmentArray = array("MCA", "MTECH", "BBA", "PHd", "MBA");

    echo '<br><br>Printing initial array :<br>';
    print_r($departmentArray);

    array_splice($departmentArray, 3, 1);

    echo '<br><br>After removing value at position 3 from array :<br>';
    print_r($departmentArray);

    echo '<br><br>';

    echo "<b>9. Convert the contents of an array to a string.</b>";

    $wordArr = array("Hello!", "My", "name", "is", "Sourav", "Mondal.", "I'm", "pursuing", "MCA");

    echo '<br><br>Printing initial array :<br>';
    print_r($wordArr);

    echo "<br><br>After converting the content of the array into string:<br>";
    echo implode(" ", $wordArr);

    echo '<br><br>';

    echo "<b>10. Convert a string so that the individual words in the string become array elements.</b>";

    $string = "Hello! My name is Sourav Mondal. I'm pursuing MCA";
    echo '<br><br>Printing initial array :<br>';
    echo $string;

    echo "<br><br>After converting the string into elements of the array:<br>";
    $wordsArr = explode(" ", $string);
    print_r($wordsArr);

    echo '<br><br>';

    echo "<b>11. Write a function to check whether a variable is numeric or not, and if it is numeric, then whether it is
    integer or not.</b>";
    echo "<br>";
    echo "<br>";
    function check_numeric($val)
    {
        if (is_numeric($val)) {
            if (is_int($val)) {
                echo $val . " is integer<br>";
            }
        } else {
            echo $val . " is not numeric<br>";
        }
    }
    $val1 = 69;
    $val2 = "Sourav";
    check_numeric($val1);
    check_numeric($val2);
    echo "<br>";
    echo "<br>";
    echo "<b>12. Write a function sumDigit() that returns the sum of the digits of an integer.</b>";
    echo "<br>";
    echo "<br>";
    function sum_of_digits($num)
    {
        $sum = 0;
        while ($num != 0) {
            $sum = $sum + $num % 10;
            $num = $num / 10;
        }
        return $sum;
    }

    $num = 123;
    echo ("The result is = " . sum_of_digits($num));
    echo "<br>";
    echo "<br>";
    echo "<b>13. Write a function named gcd() that accepts two integers as parameters and returns the greatest
    common divisor (GCD) of the two numbers.</b>";
    echo "<br>";
    echo "<br>";
    function gcd($num1, $num2)
    {
        for ($i = 1; $i <= $num1 && $i <= $num2; ++$i) {
            if ($num1 % $i == 0 && $num2 % $i == 0)
                $res = $i;
        }
        return $res;
    }
    $num1 = 81;
    $num2 = 153;
    echo ("The gcd of the two numbers is = " . gcd($num1, $num2));
    // echo "<br>";
    // echo "<br>";
    // echo "14. Write a function called insideOut() that will accept an array and return it with its innermost
    // elements swapped with its outer most elements.";
    // echo "<br>";
    // echo "<br>";

    echo "<br>";
    echo "<br>";

    ?>


</body>

</html>