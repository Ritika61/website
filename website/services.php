<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Pixels Photography</title>
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
        .services-container {
            padding: 20px;
            width: 80%;
        }
        .service-item {
            background-color: #444;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .service-item h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">Pixels Photography</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="portfolio.php">Gallery</a>
            <a href="contact.php">Contact Us</a>
        </nav>
    </header>
    <h1>Our Services</h1>
    
    <div class="services-container">
        <div class="service-item">
            <h3>Wedding Photography</h3>
            <p>We specialize in capturing the most beautiful and memorable moments of your wedding day. Our approach is to blend photojournalism with artistic portraiture to create stunning images that tell the story of your special day.</p>
        </div>
        <div class="service-item">
            <h3>Portrait Photography</h3>
            <p>Whether it's for a professional headshot or a family portrait, we ensure that each image reflects the personality and essence of the subject. Our goal is to create timeless portraits that you'll cherish forever.</p>
        </div>
        <div class="service-item">
            <h3>Event Photography</h3>
            <p>From corporate events to private parties, we capture every important detail with a creative touch. Our event photography services are designed to document and highlight the key moments of your event.</p>
        </div>
    </div>
</body>
</html>
