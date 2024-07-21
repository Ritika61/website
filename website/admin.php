<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Pixels Photography</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        header {
            width: 100%;
            background: #222;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header .logo {
            color: white;
            font-size: 24px;
            text-decoration: none;
            margin-left: 20px;
        }
        header .navbar {
            display: flex;
        }
        header .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s;
        }
        header .navbar a:hover {
            color: #f0f0f0;
        }
        h1 {
            margin-top: 20px;
            color: #fff;
        }
        .admin-container {
            padding: 20px;
            width: 80%;
        }
        .admin-section {
            background-color: #444;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .admin-section h2 {
            margin-top: 0;
        }
        .admin-section form {
            display: flex;
            flex-direction: column;
        }
        .admin-section label {
            margin: 10px 0 5px;
        }
        .admin-section input, .admin-section select, .admin-section textarea {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .admin-section button {
            padding: 10px;
            background-color: #222;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .admin-section button:hover {
            background-color: #555;
        }
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
    <h1>Admin Panel</h1>
    <div class="admin-container">
        <div class="admin-section">
            <h2>Welcome to the Admin Panel</h2>
            <p>Use the navigation above to manage gallery images and services.</p>
        </div>
    </div>
</body>
</html>
