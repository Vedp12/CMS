<?php
include 'Partials/_back_to_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-section</title>
    <link rel="stylesheet" href="style.css">
    <script src="input.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="dasboard-section container-fluid d-flex align-items-center justify-content-center full-h  p-0 m-0 ">
        <div class="main-dasboard col-lg-12 d-flex align-items-center justify-content-center full-h  p-0 m-0">
            <div class="row col-lg-12 ">
                <!-- ---------------------------------------------left-button-section-------------------------------------------------- -->
                <div
                    class="left-button-section col-lg-2 d-flex full-h align-items-center justify-content-center flex-column p-0 m-0 ">
                    <div class="top-lbs-section d-flex align-items-center justify-content-center ">
                        <a style="font-family: Academy; font-size: 27px; color: white;" class="navbar-brand"
                            href="#"><img style="width: 55px;" src="img/nest.png" alt=""> StudyNest</a>
                    </div>
                    <div class="bottom-lbs-section d-flex align-items-start justify-content-center  ">
                        <div
                            class="icon-button w-100 h-25 d-flex align-items-center justify-content-center flex-column  gap-4 ">
                            <a style="color: white; text-decoration: none;" href="dashboard-section.php"><i
                                    class="bi bi-house-door"></i> Home</a>
                            <a style="color: white; text-decoration: none;" href="profile.php"><img class="profile-btn" src="img/man.png" alt="">
                                Profile</a>
                        </div>
                    </div>
                </div>
                <!-- -------------------------------------------------right-choose-section--------------------------------------------- -->
                <div
                    class="right-choose-section col-lg-10 full-h d-flex align-items-center justify-content-center flex-column p-0 m-0 ">
                    <div class="top-rcs-section d-flex align-items-center justify-content-center ">
                        <!-- <h1 class="text-center">Dashboard</h1> -->
                    </div>
                    <div class="category-section d-flex align-items-center justify-content-center flex-wrap gap-3  ">
                        <!-- pop-up-code -->
                        <!-- -------------------------student-card---------------------------------- -->
                        <div class="students-card col-5 rounded-4 ">
                            <div
                                class="card-students-section rounded-top-4 p-4 d-flex align-items-start justify-content-center flex-column gap-1">
                                <img style="width: 60px;" src="img/student.png" alt="">
                                <h2>Student</h2>
                                <p>A student portal provides secure access to academic resources, grades, schedules, and
                                    communication tools, allowing students to manage their education efficiently.</p>
                            </div>
                            <div
                                class="students-next-section rounded-bottom-4 d-flex align-items-center justify-content-end p-3 ">
                                <button id="next-btn"  ><a style="text-decoration: none;" href="access-dashborad.php"><i
                                    class="bi bi-arrow-right"></i></a></button>
                            </div>
                        </div>
                        <!-- ---------------------------------teacher-card-------------------------- -->
                        <div class="teacher-card col-5 rounded-4 ">
                            <div
                                class="card-teacher-section rounded-top-4 p-4 d-flex align-items-start justify-content-center flex-column gap-1">
                                <img style="width: 60px;" src="img/teacher.png" alt="">
                                <h2>Teacher</h2>
                                <p>A teacher portal offers a secure platform for managing classes, tracking student
                                    progress, entering grades, and communicating with students and parents efficiently.
                                </p>
                            </div>
                            <div
                                class="teacher-next-section rounded-bottom-4 d-flex align-items-center justify-content-end p-3 ">
                                <button id="next-btn"  ><a style="text-decoration: none;" href="access-dashborad.php"><i
                                    class="bi bi-arrow-right"></i></a></button>
                            </div>
                        </div>
                        <!-- ---------------------------------------admin-card----------------------------------------- -->
                        <div class="admin-card col-5 rounded-4 ">
                            <div
                                class="card-admin-section rounded-top-4 p-4 d-flex align-items-start justify-content-center flex-column gap-1">
                                <img style="width: 60px;" src="img/school.png" alt="">
                                <h2>Admin</h2>
                                <p>An admin portal provides secure access to manage student records, staff information,
                                    course scheduling, and system settings, ensuring smooth institutional operations.
                                </p>
                            </div>
                            <div
                                class="admin-next-section rounded-bottom-4 d-flex align-items-center justify-content-end p-3 ">
                                <button id="next-btn"  ><a style="text-decoration: none;" href="access-dashborad.php"><i
                                    class="bi bi-arrow-right"></i></a></button>
                            </div>
                        </div>
                        <!-- ----------------------------------------------------add-card------------------------------------------  -->
                        <div class="add-card col-5 rounded-4 ">
                            <div
                                class="card-add-section rounded-top-4 p-4 d-flex align-items-center justify-content-center flex-column gap-1">
                                <a href=""><i style="font-size: 60px;" class="bi bi-cloud-plus"></i></a>
                            </div>
                            <div
                                class="card-next-section rounded-bottom-4 d-flex align-items-center justify-content-end p-3 ">
                                <!-- <button><i class="bi bi-arrow-right"></i></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>