<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "e330l807", "Eeth3use", "e330l807");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$author_id = $_POST["username"];
$query = "SELECT Content FROM Posts WHERE author_id = '$author_id'";

if ($result = $mysqli->query($query)) {
    echo "got into query";
    echo $query;
    
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        printf ("(%s)\n", $row["Content"]);
    }

    /* free result set */
    $result->free();
}else
{
    echo "failed to query";
}

/* close connection */
$mysqli->close();
?>
