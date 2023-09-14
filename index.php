<!DOCTYPE html>
<html>
<head>
    <title>IsleRev Motor Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .motorcycle {
            margin: 20px 0;
        }

        .motorcycle img {
            max-width: 100%;
            border: 2px solid #333;
            border-radius: 5px;
        }

        .motorcycle h3 {
            color: #333;
            margin-top: 10px;
        }

        .motorcycle p {
            color: #666;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Welcome to IsleRev Motor Shop</h2>
    <p>Check out some awesome motorcycles below:</p>

    <!-- Motorcycle Showcase -->
    <div class="motorcycle">
        <img src="images/motorcycle1.jpg" alt="Motorcycle 1">
        <h3>Harley-Davidson Road King</h3>
        <p>A classic cruiser that roars down the highway. Price: $15,999</p>
    </div>

    <div class="motorcycle">
        <img src="images/motorcycle2.jpg" alt="Motorcycle 2">
        <h3>Ducati Panigale V4</h3>
        <p>A superbike designed for speed and precision. Price: $21,499</p>
    </div>

    <!-- Link to Upload Page -->
    <p>Got a cool motorcycle to share? <a href="upload.php">Show us your ride!</a></p>
</div>

</body>
</html>
