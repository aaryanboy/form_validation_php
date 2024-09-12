<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/website/css and js/logins.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="/website/loginsignup/checklogin.php" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="/website/html/signin.php">Sign up here</a>.</p>
        </form>
    </div>
</body>
</html>

