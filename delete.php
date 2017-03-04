<?php
 header('Location: delete_sure.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysqli_2";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM user WHERE id=3";

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?> 
