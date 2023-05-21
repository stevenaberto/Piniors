<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/public/styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="login-link">
            <div class="logo">
                <img src="/public/favicon.svg" class='bx bx-pencil' id="logo" />
                <span class="text">Piniors</span>
            </div>
            <p class="side-big-heading">Create your account</p>
            <p class="primary-bg-text">To keep track on your dashboard please login with your personal info</p>
            <a href="/registro" class="loginbtn">Register now</a>
        </div>
        <form action="" class="signup-form-container">
            <p class="big-heading">Login to your account</p>
            <div class="login-form-contents">
                <div class="text-fields email">
                    <label for="email"><i class='bx bx-envelope' ></i></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="text-fields password">
                    <label for="password"><i class='bx bx-lock-alt' ></i></label>
                    <input type="password" name="password" id="password" placeholder="Enter password">
                </div>
            </div>
            <input type="submit" value="Login" class="nextPage">
            </form>
</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>