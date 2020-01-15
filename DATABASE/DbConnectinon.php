<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "c10hero";

// $connection = new mysqli($severName, $userName, $password, $databaseName);

$connection = new PDO('mysql:host=' . $serverName . ';dbname=' . $databaseName, $userName, $password);

// var_dump($connection);

// if ($connection->connect_errno) {
//     exit("Database Connection Failed. Reason: " . $connection->connect_error);
//     } else {
//         echo "Connection Succesed";
// }

// $query = "INSERT INTO class (className, description) VALUES('C13','Bơi')";
// $searchId = 3;

// $query = "SELECT id, className, description FROM class WHERE id = ?";
// $statement = $connection->prepare($query);
// $statement->bind_param("d", $searchId);
// $statement->execute();

// $statement->bind_result($id, $className, $description);
// $statement->store_result();

// $query = "SELECT id, className FROM class ORDER BY id ASC";
// $result = $connection->query($query);
// if ($statement->num_rows() > 0) {
// var_dump($result);
//     while ($statement->fetch()) {
//         echo $id . " " . $className . "  " . $description . " " . "<br>";
//     }
// }
// $statement->close();
// $connection->close();
$query = "SELECT id, className, description FROM class";
$result = $connection->query($query);
var_dump($result);
if ($result->rowCount() > 0) {
    foreach ($result as $key => $rs) {
        echo $rs['id'] . ' ' . $rs['className'] . ' ' . $rs['description'] . '<br>';
    }
}
$result = null;
$connection = null;
