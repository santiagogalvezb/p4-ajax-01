<?php
require('db.php');

$sql          = "SELECT * FROM dj_data";
$result       = $conn->query($sql);
$json_to_send = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $json_to_send[] = $row;
    }
    echo json_encode($json_to_send);
} else {
    echo "0 results";
}
$conn->close();

?>