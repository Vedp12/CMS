<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'Partials/_dbconnect.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "Error: User not logged in!";
    exit;
}

$user_id = $_SESSION['user_id']; // Ensure user_id is stored in session after login

$sql = "SELECT username, profile_pic, email FROM login WHERE sno = '$user_id'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Database Error: " . mysqli_error($conn);
    exit;
}

$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo "Error: User not found in the database.";
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="style.css">
    <script src="input.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="profile-section d-flex align-items-center justify-content-center ">
        <div class="main-profile col-lg-12 d-flex align-items-center justify-content-center full-h  p-0 m-0">
            <div class="row col-lg-12 ">
                <div
                class="left-access-section col-lg-2 d-flex full-h align-items-center justify-content-center flex-column p-0 m-0 ">
                    <div class="top-las-section d-flex align-items-center justify-content-center ">
                        <a style="font-family: Academy; font-size: 27px; color: white;" class="navbar-brand"
                        href="#"><img style="width: 55px;" src="img/nest.png" alt=""> StudyNest</a>
                    </div>
                    <div class="bottom-lbs-section d-flex align-items-start justify-content-center ">
                        <div class="icon-button w-100 h-25 d-flex align-items-center justify-content-center flex-column  gap-4 ">
                            <a style="color: white; text-decoration: none;" href="dashboard-section.php"><i
                            class="bi bi-house-door"></i> Home</a>
                            <a style="color: white; text-decoration: none;" href="profile.php"><img src="uploads/<?php echo htmlspecialchars($user['profile_pic']); ?> " alt="Profile Picture" style="height: 33px; width:28px">
                            Profile</a>
                        </div>
                    </div>
                </div>
            <div
            class="right-choose-section col-lg-10  full-h d-flex align-items-center justify-content-center flex-column p-0 m-0 ">
        <div class="top-rps-section d-flex align-items-center justify-content-center ">
    <!-- <h1 class="text-center">Dashboard</h1> -->
    </div>
    <div class="profile-section d-flex align-items-center justify-content-center flex-column  ">
        <div class="profile-photo-setion col-lg-12 d-flex align-items-center justify-content-center flex-column gap-2 ">
        <img src="uploads/<?php echo htmlspecialchars($user['profile_pic']); ?>" alt="Profile Picture" style="height: 120px; width: 120px;">
        <h1><?php echo htmlspecialchars($user['username']); ?></h1> <!-- Display Username -->
        <span><?php echo htmlspecialchars($user['email']); ?></span> <!-- Display Email --> 
        <button class="Btn">
            <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
            <a href="Partials/logout.php" id="Profile_Logout" ><div class="text">Logout</a></div>
        </button>



        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>