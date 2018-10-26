<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "e330l807", "Eeth3use", "e330l807");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("(%s)\n", $row["user_id"]);
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>
