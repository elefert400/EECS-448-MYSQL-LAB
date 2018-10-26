<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "e330l807", "Eeth3use", "e330l807");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$author_id = $_POST["username"];
$content = $_POST["post"];

$query = "INSERT INTO Posts (content, author_id) VALUES('$content',(SELECT user_id FROM Users WHERE user_id = '$author_id' ))";

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
