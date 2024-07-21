<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pixels Photography</title>
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
        .contact-container {
            padding: 20px;
            width: 80%;
        }
        .contact-info, .contact-form {
            background-color: #444;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .contact-form form {
            display: flex;
            flex-direction: column;
        }
        .contact-form label {
            margin: 10px 0 5px;
        }
        .contact-form input, .contact-form textarea {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .contact-form button {
            padding: 10px;
            background-color: #222;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .contact-form button:hover {
            background-color: #555;
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
    <h1>Contact Us</h1>
    
    <div class="contact-container">
        <div class="contact-info">
            <h3>Email</h3>
            <p><a href="mailto:pixelsphotography87@gmail.com" style="color: #fff; text-decoration: none;">pixelsphotography87@gmail.com</a></p>
            
            <h3>Phone</h3>
            <p>+977 9800000056</p>
            
            <h3>Location</h3>
            <p>Butwal</p>
        </div>
        <div class="contact-form">
            <form action="send_message.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>
