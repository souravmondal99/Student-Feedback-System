<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="Search" name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</body>

</html>
<?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "feedback_system");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM employee WHERE first_name  LIKE '%$searchValue%'";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo $row['first_name'] . "<br>";
            echo $row['email'] . "<br>";
        }

      
    }   
}



?>