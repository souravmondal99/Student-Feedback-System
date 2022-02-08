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
    echo "<b>1. Automatically update the copyright year on your website.</b><br><br>";

    echo "&copy; " . date("Y");
    echo ("<br>");

    echo '<br><br>';

    echo "<b>2.Print the current date in the following formats.
Sample format: (assume current date is November 17, 2021)
17-11-2021
2021.11.17
17/11/21</b></p>";

    echo date("d-m-Y") . "<br>";
    echo date("Y.m.d") . "<br>";
    echo date("d/m/Y") . "<br><br>";

    echo '<br><br>';

    echo "<b>3. Calculate the difference between two dates.</b></p>";

  
    $date1 = date_create("2021-11-02");
    $date2 = date_create("2021-12-17");
    $diff = date_diff($date1, $date2);
    echo $diff->format("%R%a days");

    echo '<br><br>';

    echo "<b>4. Check whether a given date is valid or not.</b></p>";

  
    var_dump(checkdate(12, 31, -400));
    echo "<br>";
    var_dump(checkdate(2, 29, 2003));
    echo "<br>";
    var_dump(checkdate(2, 29, 2004));

    echo '<br><br>';

    echo "<b>5. Convert a month number to month name.</b></p>";
  
    $month_name = date("F", mktime(0, 0, 0, 06, 10));
    echo "\nMonth = " . $month_name . "\n";

    echo '<br><br>';

    echo "<b>6. Get yesterday's date.</b></p>";

  
    echo date('d M Y', time() - 60 * 44 * 10);

    echo '<br><br>';

    echo "<b>7. Check if a date is on weekend or not.</b><br><br>";

    $dt = '2011-01-29';
    $dt1 = strtotime($dt);
    $dt2 = date("l", $dt1);
    $dt3 = strtolower($dt2);
    if (($dt3 == "saturday") || ($dt3 == "sunday")) {
        echo $dt3 . ' is weekend' . "\n";
    } else {
        echo $dt3 . ' is not weekend' . "\n";
    }

    echo '<br><br>';

    echo "<b>8. Add/subtract a number of days from a particular date.</b><br><br>";

    $dt = '2011-01-01';
    echo 'Original date : ' . $dt . "<br>";
    $no_days = 40;
    $bdate = strtotime("-" . $no_days . " days", strtotime($dt));
    $adate = strtotime("+" . $no_days . " days", strtotime($dt));
    echo 'Before 40 days : ' . date("Y-m-d", $bdate) . "<br>";
    echo 'After  40 days : ' . date("Y-m-d", $adate) . "<br>";


    echo '<br><br>';

    echo "<b>9. Calculate the age of a person from her/his date of birth.</b><br><br>";

    $dateOfBirth = "29-06-1998";
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    echo 'Age is ' . $diff->format('%y');

    ?>


</body>

</html>