<?php
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_name = htmlspecialchars($_POST["service_name"]);
    $service_description = htmlspecialchars($_POST["service_description"]);

    $query = "INSERT INTO services (service_name, service_description) VALUES ('$service_name', '$service_description')";
    if (mysqli_query($conn, $query)) {
        echo "Service added successfully!";
    } else {
        echo "Failed to add service: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
