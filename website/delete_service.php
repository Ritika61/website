<?php
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_id = htmlspecialchars($_POST["service_id"]);

    $query = "DELETE FROM services WHERE id='$service_id'";
    if (mysqli_query($conn, $query)) {
        echo "Service deleted successfully!";
    } else {
        echo "Failed to delete service: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
