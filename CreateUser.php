<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "e330l807", "Eeth3use", "e330l807");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user_id = $_POST["username"];
$query = "INSERT INTO Users (user_id) VALUES('$user_id')";

if($result = $mysqli->query($query))
{
  echo "insert successful";
}
else {
  echo "insert failed try again";
}

/* close connection */
$mysqli->close();
?>
