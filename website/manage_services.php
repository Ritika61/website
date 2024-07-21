<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Services - Admin Panel</title>
    <style>
        /* Same CSS styles as admin/index.php */
    </style>
</head>
<body>
    <header>
        <a href="../index.php" class="logo">Pixels Photography</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="upload_image.php">Upload Image</a>
            <a href="manage_services.php">Manage Services</a>
        </nav>
    </header>
    <h1>Manage Services</h1>
    <div class="admin-container">
        <div class="admin-section">
            <h2>Add New Service</h2>
            <form action="add_service.php" method="post">
                <label for="service_name">Service Name:</label>
                <input type="text" id="service_name" name="service_name" required>
                
                <label for="service_description">Service Description:</label>
                <textarea id="service_description" name="service_description" required></textarea>
                
                <button type="submit">Add Service</button>
            </form>
        </div>
        
        <div class="admin-section">
            <h2>Existing Services</h2>
            <?php
                include '../connect.php';
                $query = "SELECT * FROM services";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="service-item">';
                        echo '<h3>' . $row["service_name"] . '</h3>';
                        echo '<p>' . $row["service_description"] . '</p>';
                        echo '<form action="delete_service.php" method="post" style="display:inline-block;">';
                        echo '<input type="hidden" name="service_id" value="' . $row["id"] . '">';
                        echo '<button type="submit">Delete</button>';
                        echo '</form>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No services found.</p>';
                }
            ?>
        </div>
    </div>
</body>
</html>
