<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Spice Hut Restaurant</title>
    <style>
        body { font-family:'Brush Script MT' cursive;
            font-style: oblique;   
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            background-color: #f4f4f4;
            background: url('back.png') no-repeat center center fixed;
            background-size: cover;
        }

        .forgot-password-container {
            max-width: 400px;
            margin: auto;
            padding: 150px;
            background:transparent;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(163, 160, 160, 0.1);
            margin-top: 20px;
            text-align: center;
        }

        .forgot-password-container h2 {
            color: white;
            font-size: 30px;
        }

        .forgot-password-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            color: #7e7a7a;
        }

        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #3bd140;
            color: #fff;
            padding: 8px;
            text-decoration: none;
            border-radius: 5px;            
            text-align: center;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn:hover{    
         letter-spacing: .1rem;
        }

        .back-to-login {
            text-align: center;
            margin-top: 10px;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        .back-to-login a {
            color: #3bd140;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Forgot Password Page -->
    <div class="forgot-password-container">
        
            <h2>Forgot Password</h2>
        
        <form class="forgot-password-form" action="#" method="post">
            <div class="form-group">
                
                <input type="email" id="email"placeholder="Email" name="email" required>
            </div>
            
            
            <button type="submit" class="btn">Reset Password</button>
        
        </form>

        <div class="back-to-login">
            <p>Remember your password? <a href="login.html">Login here</a></p>
        </div>
    </div>
</body>

</html>
