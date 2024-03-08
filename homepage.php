<?php
require_once('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Niel's Portfolio</title>
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </head>
  <header>
      <!-- fix font family and weight-->
      <nav>
        <div class="logo-container">
          <i class="fa-solid fa-star"></i>
          <h1 id="logo"><a href="#" id="navbar-simple" >Niel's <span style="font-weight:400;">Portfolio</span></a></h1>
        </div>
        <ul>
          <li><a href="#self-container">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="#"  style="white-space:nowrap;" onclick="contactBtn()" >Get in touch</a></li>

          <?php
          
          if(!empty($_SESSION["USER"])){
            echo "<li>". " "." Logged in as: ". $_SESSION["USER"] . "</li>";
            echo " <li><a href='index.php'  style='white-space:nowrap;' >Log-out</a></li>";
          }else{
            echo "<li ><a target='_blank' href='index.php' style='white-space:nowrap;'> Sign in</a></li>";
          }
          ?>
         
          <!-- <li><a target="_blank" href="https://www.behance.net/jesseecatli" id="navbar-simple"> Sign in</a></li> -->
        </ul>
      </nav>
  
  </header>

  <body>

   <div class="body-overlay"></div>
   <div class="body-overlay-two"></div>
    <!-- modals -->
      <div id="contact-modal">
        <div id="contact-modal-bg"></div>
        <div id="contact-content">
          <button  onclick="contactBtn()" class="contact-exit">&times;</button>
          <div id="contact-header">
            <i class="fa-solid fa-star fa-contact"></i>
            <h2 >Get in touch</h2>
          </div>
          <p>Are you interested? Let's get in touch! </p>

          <input id="contact-email" class="contact-input" placeholder=" Email">

          <input id="contact-msg" class="contact-input" placeholder=" Send me a message" >
   
          <button type="button" id="contact-send">Send</button>
        </div>
      </div>
 
    <!-- fix bg and add details-->
    <!-- <div class="floating-anch">
      <a class="floating-anchors float-active" href="#hero-container">Introduction</a>
      <a class="floating-anchors " href="#about-me-section">About me</a>
      <a class="floating-anchors " href="#services">Services</a>
      <a class="floating-anchors " href="#works">Works</a>
      <a class="floating-anchors " href="#faq">Faq</a>
    </div> -->

      <section id="hero-container">
        <div id="self-container">
        
        <div class="socials">
          <ul>
            <div class="circle-container"><div class="circle-socials"><i class="fa-solid fa-bookmark"></i></div></div>
            <div class="circle-container"><div class="circle-socials"><img src="github.png"></div></div>
            <div class="circle-container"><div class="circle-socials"><img src="linkedin.svg" alt=""></div></div>
            <div class="circle-container"><div class="circle-socials"><img src="behance.png" alt=""></div></div>
            <div class="circle-container"><div class="circle-socials"><img src="fb.png" alt=""></div></div>
          </ul>
        </div>
            <div class="self-image-container"><img src="niel2.png" id="self"></div>
          <div id ="self-text">
            <h4 style="background-color:#1F2224; font-weight:400">Introduction</h4>
            <h1 style="font-size:2rem; line-height:3rem;">Hi, I'm <span class="gold-text">Niel</span></h1>
            <h5>Graphic Designer | Computer Undergrad</h5>
            <p class="desc">I'm a self-taught graphic designer that has done significants freelancing both on graphic designing and computer repairs in the past years. I am currently undertakig my computer degree at National University Fairview, Philippines.</p>
            <button  onclick="contactBtn()" id="desc-btn">Get in Touch</button>
          </div>
      </div>
      </section>

      <!-- <section id="about-me-section">
        <div id="about-me">
          <div class="about-col-one">
            <div class="about-me-one">
              <h1>Jessee Daniel C. Catli III</h1>
              <h2>About me</h2>
              <h4>EDUCATION</h4>
            </div>
            <div class="about-me-one">
              <div>
                <div class="ed-1">
                  <p>Our Lady of Fatima University April, 2021 <br> Senior Highschool - STEM</p>
                  <ul>
                    <li>Academic Honors on all Subjects</li>
                    <li>Gen Ave of 95</li>
                  </ul>
                </div>
                <div class="ed-1">
                  <p>Our Lady of Fatima University April, 2021 <br> Bachelor of Science Computer Science - First Year</p>
                </div>
                <div class="ed-1">
                  <p>National University Fairview June, 2022 <br> Bachelor of Science in Information Technology with <br>Specialization in Mobile and Internet Technologies</p>
                  <br>
                </div>
              </div>
        
            </div>
          </div>
        <div class="about-col-one">
        
        
          <div class="about-me-one" class="about">
        
            <h4>WORK EXPERIENCE</h4>
            <p>Freelance Graphic Designer <br>2020 - 2024</p>
            <ul>
              <li>Developing promotional graphics to address client concerns</li>
              <li>Cooperate with clients and marketing teams to identify brand and strategies</li>
            </ul>
            <br>
            <p>Freelance Computer Technician <br>2019 - 2024</p>
            <ul>
              <li>Hardware Installation and Maintenance</li>
              <li>Software Installation and Configuration</li>
              <li>Peripheral Device Management</li>
            </ul>
            <br>
          </div>
        </div>
            </div>
      </section> -->
      <!-- <div id="about-me-two">
        <div class="card"><p>Experience</p></div>
        <div class="card"><p>Education</p></div>
        <div class="card"><p>Achievements</p></div>
        <div class="card"><p>Technologies</p></div>
        <div class="card"><p>Academic Organizations</p></div>
      </div> -->
      
    
    <!-- <section class="about-me-background"></section> -->
 
    <!-- <div id="dl-btn"><button type="button"> <a href="resume.docx" download></a>Download a copy</button></div> -->

    <section id="services">
      <div class="services-star-one"><i class="fa-solid fa-star"></i></div>
      <div class="services-star-two"><i class="fa-solid fa-star"></i></div>

      <h1 >Skills / Services</h1>
      <p>Welcome to the Work/Services section of our portfolio—a showcase of our passion, expertise, and commitment to delivering exceptional solutions.</p>
    <div>
      <!-- place modals on click for the box divs for more info-->
      <div class="box">
        <i class="fa-solid fa-pen-nib services-icon fa-4x"></i>
        <img src="ga.jpg" class="service-bg">
        <p>Graphic Design</p>
      </div>

      <div class="box">
        <i class="fa-solid fa-screwdriver-wrench services-icon fa-4x"></i>
        <img src="repair.jpg" class="service-bg">
        <p>Computer Repair</p>
        
      </div>

      <div class="box">
        <i class="fa-solid fa-computer services-icon fa-4x"></i>
        <img src="dev.jpg" class="service-bg">
        <p>System Development</p>
        
      </div>

      <div class="box">
        <i class="fa-solid fa-object-group services-icon fa-4x"></i>
        <img src="wireframing.jpg" class="service-bg">
        <p>Wireframing/Prototyping</p>
        
      </div>
      
    </div> 
    
    <div class="section-btn">
  <button type="button" onclick="window.location.href='https://www.behance.net/jesseecatli';">Portfolio</button>
  <button type="button" > <a style="color:white;" href="resume.docx" download>Resume</a></button>
</div>
    </section>

    <section id="works">
      <!-- Place a carousel of photos with description-->
      <div class="works-title">
        <h1 id="footer-logo" >Work / Achievements</h1>
      </div>
     
      <div class="work-carousel">
        <div class="slide-container">
          <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
              <!-- slide start -->
              <div class="card swiper-slide">
                <div class="image-content">
                  <div class="card-image">
                    <img src="java.jpg" alt="">
                  </div>
                </div>
                <div class="card-content">
                  <h1>College Java programming contest</h1>
                  <p>Got first place on a programming contest that is a college held event by my course</p>
                </div>
              </div>
              <!-- slide end -->
               <!-- slide start -->
               <div class="card swiper-slide">
                <div class="image-content">
                  <div class="card-image">
                    <img src="fervent.jpg" alt="">
                  </div>
                </div>
                <div class="card-content">
                  <h1>VP of Management at Fervent</h1>
                  <p>Stayed for 1 year and held several positions at NUFV Fervent Esports, such as Graphic Designers, creative head, assistant vp, to the Vp of Management</p>
                </div>
              </div>
              <!-- slide end -->
              <!-- slide start -->
              <div class="card swiper-slide">
                <div class="image-content">
                  <div class="card-image">
                    <img src="dota.png" alt="">
                  </div>
                </div>
                <div class="card-content">
                  <h1>Event Poster</h1>
                  <p>Designed a Dota 2 poster for cyberzone </p>
                </div>
              </div>
              <!-- slide end -->
              <div class="card swiper-slide">
                <div class="image-content">
                  <div class="card-image">
                    <img src="logo.png" alt="">
                  </div>
                </div>
                <div class="card-content">
                  <h1>Logo Design</h1>
                  <p>Coordinated with cyberzone event management parties to design their event logo</p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <div class="card-image">
                    <img src="pubg.png" alt="">
                  </div>
                </div>
                <div class="card-content">
                  <h1>Event poster</h1>
                  <p>Designed a PUBGM poster for Cyberzone</p>
                </div>
              </div>
              <!-- slide end -->
              <!-- slide end -->
            </div>
          </div>
        <div class="swiper-nav">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        </div>
        <!-- Pagination and Navigation -->
        
      </div>
    </section>

<!--     
    <section id="tranding">
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="carousel.jpg" alt="Tranding">
              </div>
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="java.jpg" alt="Tranding">
              </div>
              
            </div>

            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="carousel.jpg" alt="Tranding">
              </div>
             
            </div>


          </div>

          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination-bullet"></div>
          </div>

        </div>
      </div>
    </section> -->
<!-- 
    <section id="faq">
      <div class="faq-header-container">
        <div class="div logo-wrapper">
          <h1 id="footer-logo" >Frequently asked questions</h1>
        </div>
        <p>FAQ section if you have any unaswered or additional questions. Feel free to message me through my contacts at the footer</p>
        <hr id="faq-hr">
      </div>
      <div class="wrapper">
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head">
          <label for="collapsible-head" style="padding-left:1.5rem;">What kind of work do you specialize in?</label>
          <div class="collapsible-text">
            <p> I've done freelance graphic designing and computer repair for 5 to 7 years and can develop systems on a academic level</p>
          </div>
        </div>
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head2">
          <label for="collapsible-head2" style="padding-left:1.5rem;">Can I see examples of your previous projects?</label>
          <div class="collapsible-text">
            <p>A link to my portfolio and other socials are avaialble at the introduction or at the top right corner of the website. Feel free to reach out too! </p>
          </div>
        </div>
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head3">
          <label for="collapsible-head3" style="padding-left:1.5rem;">Are you available for freelance work or new job opportunities?</label>
          <div class="collapsible-text">
            <p>Yes, I am currently still doing freelance work </p>
          </div>
        </div>
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head4">
          <label for="collapsible-head4" style="padding-left:1.5rem;">How can I contact you for potential collaboration <br>or job opportunities?</label>
          <div class="collapsible-text">
            <p>Feel free to reach out to any of the provided contact info on the website. Thanks! </p>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head5">
          <label for="collapsible-head5" style="padding-left:1.5rem;">Do you have any certifications or formal <br>education in your field?
          </label>
          <div class="collapsible-text">
            <p>I am a self-taught graphic designer, as well as for computer repairs, however I am still taking my college course for my computer degree</p>
          </div>
        </div>
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head6">
          <label for="collapsible-head6" style="padding-left:1.5rem;">How do you stay updated with the latest industry trends?</label>
          <div class="collapsible-text">
            <p>I stay updated by following several tech enthusiasts as well as reading articles about recent development in technology. I also part-take in online forums and discussions</p>
          </div>
        </div>
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head7">
          <label for="collapsible-head7" style="padding-left:1.5rem;line-break:strict;">Can you explain your role and contributions in a  specific project from your portfolio?
          </label>
          <div class="collapsible-text">
            <p>Sure, however there are several positions included in my resume, so feel free to reach out to one of my contacts so I can give a more detailed response</p>
          </div>
        </div>
        <div class="collapsible">
          <input type="checkbox" id="collapsible-head8">
          <label for="collapsible-head8" style="padding-left:1.5rem;">
            How do you approach problem-solving in your projects?</label>
          <div class="collapsible-text">
            <p>I usually approach problem solving in general by first identifying the root cause of a problem, and after that I try to identify and group the solutions needed for my to solve a said problem </p>
          </div>
        </div>
      </div>

    </section> -->
<!--     
    <div class="faq-contact">
      <h3>Didn't find an answer?</h3>
      <button type="button">contact me</button>
    </div> -->
    
<div class="row gallery">
<div class="row-title-wrapper">
  <h1 class="row-title">Gallery</h1>
</div>
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
    src="java.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
    src="fervent.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="pubg.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />
    <img
      src="detailed.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="dota.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />
    <img
      src="card.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />
  </div>
</div>
  <section class="comment-section">

    <div class="comment-title">
    <h2 style="color:#E6CFA1;">Feedback section</h2>
    <p>Feel free to drop a feedback of your experience so far!</p>
      <hr>
      <h3></h3>
      <?php
      if(!empty($_SESSION["USER"])){
        echo "<h6 class='user-comment'>"."Leave a comment as ". $_SESSION["USER"]."</h3>";
      }else{
        echo "<a href='index.php' style='color:white;'>Click here to login and leave a comment</a>";
      }
      ?>

    </div>
    
    <div class="comments-container">
      <div class="forms-container">
      <?php
      if(!empty($_SESSION["USER"])){
      $currentUser = $_SESSION['USER'];
      echo "<div class='comment-pfp'>";
      echo "<div class='circle'>"."<i class='fa-solid fa-user'></i>"."</div>";
      echo "<h3 class='user-handle'>".$currentUser."</h3>";
      echo "</div>";
      echo "<div class='comment-form'>";
        if (isset($_POST['comment-btn'])) {
    require_once "config.php"; // Make sure this line is placed before using $conn
    
    $fnameQuery = "SELECT user_id FROM registration_tbl WHERE user_fname = ?";
    
    // Prepare and execute the SELECT query
    $stmt = mysqli_prepare($conn, $fnameQuery);
    mysqli_stmt_bind_param($stmt, "s", $currentUser);
    mysqli_stmt_execute($stmt);
    $fnameResult = mysqli_stmt_get_result($stmt);
    // Check if a row was returned
    if ($username = mysqli_fetch_assoc($fnameResult)) {
      // print_r($username['user_id']);
        $comment = $_POST['comment-area'];
    
        // Prepare and execute the INSERT query
        $commentQuery = "INSERT INTO comments_tbl (user_comment, user_id) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $commentQuery);
        mysqli_stmt_bind_param($stmt, "si", $comment, $username['user_id']);
    
    
    }
}}
?>
<form method="post" action="homepage.php">
        <textarea rows="3" class="comment-textarea" placeholder="write your comment" name="comment-area" required ></textarea>
        <button class="comment-btn" type="submit" name="comment-btn">Post your comment</button>
</form>
</div>
      </div>

      <div class="comment-section">

<?php
 $sql = "SELECT * FROM comments_tbl order by comment_id desc limit 5";
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
    echo "<hr>";
    $user_id=$row["user_id"];
    $usernameQuery = "SELECT user_fname FROM registration_tbl where user_id=$user_id";
    $usernameResult = mysqli_query($conn, $usernameQuery);
    $username = mysqli_fetch_assoc($usernameResult);
    echo "<div class='comment-box'>";
    echo "<i class='fa-solid fa-bookmark comment-bookmark'></i>";
    echo "<div class='comment-pfp2'>";
    
    echo "<div class='circle'>"."<i class='fa-solid fa-user'></i>"."</div>";
    echo "<h3 class='user-handle'>".$username["user_fname"]."</h3>";
    echo "</div>";
    echo "<p>".$row["user_comment"]."</p>";
    echo "</div>";
    
  }
}
?>


        <!-- </div>
      <div class="comment-box">
        <div class="comment-pfp">
        <h3 class="user-handle">Kerrygan Pe</h3>
          <div class="circle">K</div>
        </div>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suscipit magna ipsum, ac rutrum dui aliquam et. Donec felis ligula, dignissim sagittis magna eget, congue vulputate lorem. Donec molestie suscipit urna quis eleifend. Donec sagittis vestibulum auctor. Vivamus ornare nisi sit amet ipsum tempor mollis. Praesent pretium nibh dolor, gra</p>
      </div> -->
</div>
  </section>

    <footer>
      <div class="footer-logo">
        <i class="fa-solid fa-star footer-star"></i>
        <h1 style="margin-right:2rem;"><a href="#" id="navbar-simple">Niel's <span style="font-weight:400;">Portfolio</span></a></h1>
        <hr> 
        <div id="footer-cards">
      <div class="footer-card">
        <i class="fa-solid fa-envelope footer-icon fa-lg"></i>
        <p class="footer-desc">jessee.dan.catli@gmail.com</p>
      </div>
      
      <div class="footer-card">
        <i class="fa-solid fa-phone footer-icon fa-lg"></i>
        <p class="footer-desc">63+ 9284720240</p> 
      </div>
      
       <div class="footer-card">
        <i class="fa-solid fa-location-crosshairs footer-icon fa-lg"></i>
        <p class="footer-desc">Manila, Philippines</p>
      </div>
      </div>
    </div> 
    </footer>  

    <script src="swiper-bundle.min.js"></script>
    <script src="
https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js
"></script>
  <script src="script.js"></script>
  </body>

</html>