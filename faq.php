<?php
require_once('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="faq.css">
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
<nav>
        <div class="logo-container">
          <i class="fa-solid fa-star"></i>
          <h1 id="logo"><a href="#" id="navbar-simple" >Niel's <span style="font-weight:400;">Portfolio</span></a></h1>
        </div>
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="faq.php">FAQ</a></li>
          

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

    </section>
</body>
</html>
