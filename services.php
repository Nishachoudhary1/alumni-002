<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
    <header>
        <!--made changes-->
        <nav class="navigation">
            <label class="navigation-h">NBU</label>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
            <label class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
    </header>
    <section>
        <div class="section_container">
            <div class="section_details">
                <h2>Services</h2>
                <p>Our team offer website modification</p>
            </div>
            <div class="section_main-box">
                <div class="section_box section_box-grey">
                <div class="icon">
                    <i class="fas fa-desktop"></i>
                </div>
                <h2>Web Design</h2>
                <hr>
                <p>Adding new features to make this website more affective towars its user.</p>
                <a href="#">Read More</a>
                </div>

                <div class="section_box section_box-red">
                <div class="icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h2>Database updation</h2>
                <hr>
                <p>We always try to make our database up to date.</p>
                <a href="#" class="section_white-border">Read More</a>
                </div>
                
                <div class="section_box section_box-grey">
                <div class="icon">
                    <i class="fas fa-search"></i>
                </div>
                <h2>Expanding circle</h2>
                <hr>
                <p>In nearby future days we will try to expand this network throughot the university.</p>
                <a href="#">Read More</a>
                </div>

            </div>
        </div>
    </section>

<!--- Footer code start --->
<section class="footer">
    <div class="social">
        <a href="#"><i class="fab fa-instagram"></i> </a>
        <a href="#"><i class="fab fa-snapchat"></i> </a>
        <a href="#"><i class="fab fa-twitter"></i> </a>
        <a href="#"><i class="fab fa-facebook"></i> </a>
    </div>
    <ul class="list">
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="terms.php">Terms</a></li>
    <li><a href="privacy.php">Privacy Policy</a></li>
  </ul>
    <p class="copyright">Future Coders @2021</p>
</section>
<!--- Footer code end --->
</main>
</body>
</html>



