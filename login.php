<?php
session_start();
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'Partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Fetch user data including user ID, email, and profile picture
    $sql = "SELECT sno, username, email, profile_pic FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        // Set session variables
        $_SESSION['user_id'] = $user['sno'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['profile_pic'] = $user['profile_pic'];
        header("location: profile.php");
        exit;
    } else {
        $showError = "Invalid username or password!";
    }
}   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>
    <link rel="stylesheet" href="style.css">
    <script src="input.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="singin-page container-fluid d-flex align-items-start justify-content-center full-h ">
        <div class="sign-in-section  container-fluid full-h d-flex align-items-center justify-content-center ">
            <div class="clone-section container full-h d-flex align-items-center justify-content-center">
                <!-- ------------------------------------------------------------------------------------- -->
                <div class="page-signin col-xl-8  d-flex align-items-center justify-content-center rounded">
                    <!-- -------------------------------left-section-------------------------------------------------- -->
                    <div class="left-img-section col-6 d-flex align-items-center justify-content-center ">
                        <img style="width: 80%;"  src="img/login-img.jpg" alt="">
                    </div>
                    <!-- ---------------------------------right-section---------------------------- -->
                    <form id="signin-form"
                    action="/CMS/login.php"
                    method="post"
                        class="right-text-section col-6 d-flex align-items-center justify-content-center flex-column  gap-2">
                        <span><img style="width: 20%;" src="nest (1).png" alt=""> StudyNest</span>
                        <h4>login</h4>
                        <h6>with your Google Account</h6>
                        <input id="username-input" class="email-in rounded" type="username" placeholder="username" name="username">
                        <input id="password-input" class="password-in rounded" type="password" placeholder="Password "
                            name="password">
                        <!-- <label for="" style="color: rgb(0, 0, 0);  font-size: 10px; margin-right: 160px; "><input
                                type="checkbox"> I
                            agree of the <a href="">Terms and conditions</a></label> -->
                        <div class="crn d-flex align-items-center justify-content-between p-2 ">
                            <p class="d-flex align-items-center justify-content-center">Create a Account <a
                                    style="margin-left: 10px;" href="sign-in.php">sign-in?</a></p>
                            <button class="rounded">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
    <!-- js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>