<?php 
$showAlert = false;
$exists = false;

include 'Partials/_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    
    $newFileName = "default.png";

    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === 0) {
        $profilePicName = $_FILES["profile_pic"]["name"];
        $profilePicTmp = $_FILES["profile_pic"]["tmp_name"];
        $profilePicSize = $_FILES["profile_pic"]["size"];

        $uploadDir = "uploads/"; 
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];

        
        $fileExt = strtolower(pathinfo($profilePicName, PATHINFO_EXTENSION));

        if (in_array($fileExt, $allowedExtensions)) {
            if ($profilePicSize < 5000000) { 
                $newFileName = uniqid("IMG-", true) . "." . $fileExt; 
                $fileDestination = $uploadDir . $newFileName;

                
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                
                if (!is_dir($uploadDir)) {
                  echo "Upload directory does not exist: " . $uploadDir;
              } elseif (!is_writable($uploadDir)) {
                  echo "Upload directory is not writable: " . $uploadDir;
              } elseif (!file_exists($profilePicTmp)) {
                  echo "Temporary file does not exist: " . $profilePicTmp;
              } elseif (!move_uploaded_file($profilePicTmp, $fileDestination)) {
                  echo "Error moving file! Check permissions.";
              } else {
                  echo "File uploaded successfully!";
              }
              
            } else {
                die("File is too large! Maximum size is 5MB.");
            }
        } else {
            die("Invalid file type! Only JPG, JPEG, PNG, and GIF are allowed.");
        }
    }

    if ($password == $cpassword) { 
        
        $sql = "INSERT INTO `login` (`username`, `email`, `password`, `profile_pic`) 
                VALUES ('$username', '$email', '$password', '$newFileName')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
          session_start();
          $_SESSION['user_id'] = mysqli_insert_id($conn); 
          header("location: profile.php");
          exit;
          
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign-page</title>
  <script src="input.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https:
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https:
</head>

<body>
  <div class="singin-page container-fluid d-flex align-items-start justify-content-center full-h ">
    <div class="sign-in-section  container-fluid full-h d-flex align-items-center justify-content-center ">
      <div class="clone-section container full-h d-flex align-items-center justify-content-center">
        <!-- ------------------------------------------------------------------------------------- -->
        <div class="page-signin col-xl-8  d-flex align-items-center justify-content-center rounded">
          <!-- -------------------------------left-section-------------------------------------------------- -->
          <div class="left-img-section col-6 d-flex align-items-center justify-content-center ">
            <img style="width: 10%; " src="img/sing-img.jpg" alt="">
          </div>
          
            <form action="/CMS/sign-in.php" id="signin-form" method="post" enctype="multipart/form-data" class="right-text-section col-6 d-flex align-items-center justify-content-center flex-column  gap-2" enctype="multipart/form-data">

            <span><img style="width: 20%;" src="nest (1).png" alt=""> StudyNest</span>
            <h4>sign in</h4>
            <h6>with your Google Account</h6>
            <label >Profile Picture:</label>
            <input type="file" name="profile_pic" accept="image/*" />
            <input
                id="firstname-input"
                class="first-name-in rounded"
                type="text"
                placeholder="Username"
                name="username"
                required
              />
              <input
                id="email-input"
                class="email-in rounded"
                type="email"
                placeholder="Email"
                name="email"
                required
              />
              <input
                id="password-input"
                class="password-in rounded"
                type="password"
                placeholder="Password "
                name="password"
                required
              />
              <input
                id="Password-input"
                class="password-in rounded"
                type="password"
                placeholder="Confirm Password"
                name="cpassword"
                required
              />
            
            <div class="crn d-flex align-items-center justify-content-between p-2 ">
              <p class="d-flex align-items-center justify-content-center">Already a member <a style="margin-left: 10px;"
                  href="login.php">login?</a></p>
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
  <script src="https:
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>