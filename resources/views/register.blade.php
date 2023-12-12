<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .register-container {
            width: 400px;
            height: 500px;
            padding: 30px;
            margin: 100px auto;
            background-color: #fff;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
        }

        .register-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .register-container input[type="text"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            outline: none;
            border-radius: 3px;
        }

        .register-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5ABA8F;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .register-container input[type="submit"]:hover {
            background-color: #2f7f5b;
        }

        .register-container a {
            color: #666;
            text-decoration: none;
        }

        .register-container a:hover {
            color: #444;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form action="your-server-script" method="post">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Register">
        </form>
        <a href="/login">Already have an account?</a>
    </div>
</body>
</html>