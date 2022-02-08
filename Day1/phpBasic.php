<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAY 1 Assignments</title>
</head>

<body>
    <button><a href="../">Back to Homepage</a></button>
    <h1>PHP DAY 1 Assignments</h1>
    <h4>Developed by: Sourav Mondal, Roll: 2082017</h4>
    <a style="color:red;" href="PHPCode.txt">
        <h3>Click here for PHP Codes</h3>
    </a>
    <br><br>
    <?php

    echo "My first PHP script!";
    echo "<p>1. PHP Info: " . phpinfo() . "</p>";
    echo "<p>2. PHP version: " . phpversion() . "</p>";
    echo "<p>3. Owner: " . get_current_user() . "</p>";
    echo "<p>4. Root Directory: " . getenv('DOCUMENT_ROOT') . "</p>";
    echo "<p>5. File name of the currently executing ecript: " . $_SERVER['PHP_SELF'] . "</p>";
    echo "<p>6. IP Address of the host server: " . $_SERVER['SERVER_ADDR'] . "</p>";
    echo "<p>7. Name of the host server: " . $_SERVER['SERVER_NAME'] . "</p>";
    echo "<p>8. Server Identification String: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    echo "<p>9. Name and revision of the information protocol: " . $_SERVER['SERVER_PROTOCOL'] . "</p>";
    echo "<p>10. Request method used to access the page: " . $_SERVER['REQUEST_METHOD'] . "</p>";
    echo "<p>11. IP address from where the user is viewing the current page: " . $_SERVER['REMOTE_ADDR'] . "</p>";
    echo "<p>12. Hostname from where the user is viewing the current page: </p>";
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

    echo $hostname;
    echo "<p>13. Absolute path of the currently executing script: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";
    echo "<p>14. Port on server being used for communication: " . $_SERVER['SERVER_PORT'] . "</p>";

    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);


    ?>


</body>

</html>