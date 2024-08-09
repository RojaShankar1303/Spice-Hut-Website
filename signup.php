<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Spice Hut Restaurant</title>
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family:'Brush Script MT' cursive;
            font-style: oblique;        
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            background: url('back.png') no-repeat center center fixed;
            background-size: cover;
        }
        .signup-container {
            max-width: 400px;
            margin: auto;
            padding: 30px ;
            background:transparent;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .signup-container h2 {
            text-align: center;
            color: #f5f3f3;
            font-size: 2.5em;
            font-weight: bold;
        }
        .signup-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #2eda34;
            color: #fff;
            padding: 10px;
            font-size: 20px; 
            border: 1px solid #4f524f;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-container {
            text-align: center;
            padding: 20px; 
                    
        }
        .btn:hover{    
         letter-spacing: .1rem;
        }
        

        .have-account {
            text-align: center;
            margin-top: 10px;
            color:rgb(250, 247, 247);
            font-weight: bold;
            font-size: 20px;
        }
        .have-account a {
            color: #2ae631;
            text-decoration: none;
            font-weight: bold;
        }


    </style>
</head>
<body>
    <!-- Signup Page -->
    <div class="signup-container">
        <h2>Signup </h2>
        <form class="signup-form" action="auth.php" method="post">
            <div class="form-group">                
                <input type="text" id="username" placeholder="UserName" name="username" required>
            </div>

            <div class="form-group">                
                <input type="email" id="email"placeholder="Email" name="email" required>
            </div>

            <div class="form-group">               
                <input type="password" id="password" placeholder="Password"name="password" required>
            </div>

            <div class="form-group">                
                <input type="password" id="confirm-password" placeholder="confirm_password"name="confirm_password" required>
            </div>
            <div class="btn-container">
            <button type="submit" class="btn">Signup</button>
            </div>
        </form>
        

        <div class="have-account">
            <p>Already have an account? <a href="login.html">Login here</a></p>
        </div>
    </div>
    
</body>
</html>     