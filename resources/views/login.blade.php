<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login Page</title> 
    <style> body { font-family: Arial, sans-serif; background-color: #f8f8f8; } 
        .login-container {
        width: 400px;
        height: 500px;
        padding: 30px;
        margin: 100px auto;
        background-color: #fff;
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            outline: none;
            border-radius: 3px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5ABA8F;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .login-container input[type="submit"]:hover {
            background-color: #2f7f5b;
        }

        .login-container a {
            color: #666;
            text-decoration: none;
        }

        .login-container a:hover {
            color: #444;
        }
    </style>
</head> 
<body> 
    <div class="login-container"> 
        <h1>Login</h1> 
        <form> 
            <input type="text" placeholder="Username" required> 
            <input type="password" placeholder="Password" required> 
            <input type="submit" value="Login"> 
        </form> 
        <a href="#">Forgot password?</a>
        <br>
        <a href="/register">Register</a> 
    </div> 
</body> 
</html>