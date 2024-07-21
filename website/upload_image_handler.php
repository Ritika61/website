<?php
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $image_name = $_FILES["image"]["name"];
    $image_temp = $_FILES["image"]["tmp_name"];
    $category = htmlspecialchars($_POST["category"]);

    $target_dir = "../images/";
    $target_file = $target_dir . basename($image_name);

    if (move_uploaded_file($image_temp, $target_file)) {
        $query = "INSERT INTO images (img_name, category) VALUES ('$image_name', '$category')";
        if (mysqli_query($conn, $query)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Failed to upload image: " . mysqli_error($conn);
        }
    } else {
        echo "Failed to move uploaded file.";
    }
} else {
    echo "Invalid request.";
}
?>
