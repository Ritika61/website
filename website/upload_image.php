<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image - Admin Panel</title>
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
    <h1>Upload Image</h1>
    <div class="admin-container">
        <div class="admin-section">
            <h2>Upload New Image</h2>
            <form action="upload_image_handler.php" method="post" enctype="multipart/form-data">
                <label for="image">Select Image:</label>
                <input type="file" id="image" name="image" required>
                
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="present">Present Projects</option>
                    <option value="past">Past Projects</option>
                </select>
                
                <button type="submit">Upload</button>
            </form>
        </div>
    </div>
</body>
</html>
