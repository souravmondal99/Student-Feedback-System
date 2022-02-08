<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student feedback system</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <div class="nav">
            <div class="logo">
                <h4>Student feedback system</h4>
            </div>
            <div class="links">
                <a href="#" class="mainlink">Home</a>
                <a href="#">FAQ</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="dropdown">
                <button class="dropbtn">PHP Assignments
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Day1/phpBasic.php">Day 1</a>
                    <a href="Day2/phpBasic.php">Day 2</a>
                    <a href="Day3/phpBasic.php">Day 3</a>
                </div>
            </div>

        </div>

        <!-- LANDING PAGE -->

        <div class="landing">

            <div class="landingImage" data-aos="fade-right" data-aos-duration="1000">
                <img src="img/3.png" alt="">
            </div>
            <div class="landingText" data-aos="fade-left" data-aos-duration="1000">
                <p>Welcome! to the <b>Student feedback system</b>. This is a Basic feedback System where There are 3 sections with respective functionalites. Click on below buttons to open each portals :
                </p>
                <div class="btn">
                    <a class="nav-link active" aria-current="page" href="admin/">Admin Login</a>
                </div>
                <div class="btn">
                    <a class="nav-link active" aria-current="page" href="Faculty_login1.php">Faculty Login</a>
                </div>
                <div class="btn">
                    <a class="nav-link active" aria-current="page" href="Login1.php">Student Login/Register</a>
                </div>
               
            </div>
        </div>

        <!-- ABOUT SECTION -->

        <!-- <div class="about">
            <div class="aboutList" data-aos="fade-up" data-aos-duration="800">
                <ol>
                    <li>
                        <p>This Basic Banking System Website is developed by <span>Sourav Mondal</span> as a project of Graduate Rotational Internship Program (GRIP) which was conducted by The Sparks Foundation</p>
                    </li>
                </ol>
            </div>
        </div> -->

        <div class="footer">
            <h2>&copy;2022 Sourav Mondal</h2>
            <div class="footerlinks">
                <a href="#" class="mainlink">Home</a>
                <a href="#">FAQ</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>