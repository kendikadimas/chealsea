<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    if(mysqli_num_rows($result) > 0) {
        header("Location: index.php");    
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        exit();
    } else {
        echo "Login Failed";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Login</title>
</head>
<body class="login-body">
    <section class="login-img">
        <img src="media/img/login.png" alt="Chelsea players">
    </section>
    <section class="login-form">
        <div class="login-box">
            <h1>Login to your account</h1>
            <form method="POST">
                <div class="input-form">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required><br>

                    <a href="#">Forgot?</a>
                </div>
                <button type="submit" class="login-button" name="login">Login now</button>
            </form>
            <div class="signup-link">
                Don’t Have An Account? <a href="signup.php">Sign Up</a>
            </div>
        </div>
    </section>
</body>
</html>
