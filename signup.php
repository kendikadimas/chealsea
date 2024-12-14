<?php

include 'koneksi.php';

if(isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
    if($query) {
        mysqli_query($koneksi, $query);
        header("Location: login.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Signup</title>
</head>
<body class="signup-body">
    <section class="signup-form">
        <div class="signup-box">
            <h1>Create your account</h1>
            <form method="post">
                <div class="singup-form">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
                </div>
                <button type="submit" class="signup-button" name="signup">Create account</button>
                <button type="submit" class="google-button">Continue with Google</button>
            </form>
            <div class="signup-link">
                Already Have An Account? <a href="login.php">Login</a>
            </div>
        </div>
    </section>
    <section class="signup-img">
        <img src="media/img/login.png" alt="Chelsea players">
    </section>
</body>
</html>