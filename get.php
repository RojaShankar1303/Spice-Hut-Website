<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant </title>
    <style>
        body {
            font-family:'Brush Script MT' cursive;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            background: url('back.png') no-repeat center center fixed;
            background-size: cover;
        }

        .welcome-msg {
            text-align: center;
            padding: 20px;            
            margin: auto;
        }

        .welcome-msg h2 {
            font-size: 2.5em; /* Adjust the font size */
            font-style: oblique; /* Adjust the font style */
            color: #f7f6f6; /* Adjust the font color */
        }

        .welcome-msg p {
            font-size: 1.2em; /* Adjust the font size */
            color: #f7f6f6;
            font-weight: bold; /* Adjust the font weight */
        }

        .transparent-container {
            flex-grow: 1;
        }

        .btn-container {
            text-align: center;
            padding: 20px;
            
        }

        .btn {
            font-size: 1.2em; /* Adjust the font size */
            font-weight: bold; /* Adjust the font weight */
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        @media (max-width: 768px) {
            .welcome-msg,
            .btn-container {
                max-width: 90%;
            }
        }
    </style>
</head>

<body>
    <!-- Get Started Page with Responsive Background Image -->
    <div class="welcome-msg">
        <h2>Welcome to Spice Hut Restaurant</h2>
        <p>Discover the flavors that delight your taste buds.</p>
    </div>
    <div class="transparent-container"></div>
    <div class="btn-container">
        <a href="signup.php" class="btn">Get Started</a>
    </div>
</body>

</html>
