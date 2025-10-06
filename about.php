<!DOCTYPE html>
<html lang="en" >
<head>
 <!-- Primary Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About - CampusXchange</title>
  <meta name="title" content="About - CampusXchange">
  <meta name="description" content="Learn about CampusXchange, a platform dedicated to education, mentorship, web solutions, and SEO services to support students and businesses.">
  <meta name="keywords" content="about CampusXchange, education platform, student services, learning support, mentorship, CampusXchange story , campusXchange founder , campusXchange mentor">
  <meta name="author" content="CampusXchange"/>
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://campusxchange.in/">
  <meta property="og:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="og:description" content="Join CampusXchange and explore internships, live projects, and opportunities to build your career. Apply online today!">
  <meta property="og:image" content="https://campusxchange.in/assets/og-image.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://campusxchange.in/">
  <meta property="twitter:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="twitter:description" content="CampusXchange helps students connect with internships, live projects, and career opportunities. 100% online and easy to apply!">
  <meta property="twitter:image" content="https://campusxchange.in/assets/og-image.jpg">

<!-- styles -->
<link rel="stylesheet" href="style.css" type="text/css">
<!-- cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--favicon ------------------------------------------------------------------------------>
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">


  <style>
    :root {

  --primary-color: #004080;
  --secondary-color: #f43f5e;
  --bg-light: #f9fafb;
  --Lighttext-color: #000000;
  --darktext-color:white;
  --card-bg: #f3eded;
  --shadow: 0 8px 30px rgba(2,6,23,0.08);
  --radius: 10px;
  --font-main: 'Poppins', sans-serif;
  --hoverbg :#da6b7e;
  --pSize:0.9rem;
  --border:none;
}

    /* Hero Section */
    .about-hero {
      background:linear-gradient(350deg,  var(--primary-color) ,#f43f5e);
      color: #fff;
      padding: 3rem 2rem;
      text-align: center;
      width: 90%;
      margin: 0 5%;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }
    .about-hero h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: rgb(218, 209, 209);
    }
    .about-hero p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: auto;
    }
    /* Founder Section -------------------------------*/
    .founder-section {
      background: #f9fafb;
      padding: 2rem 0.5rem;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 2rem;

      width: 90%;
      margin: 2.5% 5%;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      border: 2px solid white;
    }
    .founder-img {
      flex: 0 0 160px;
      border-radius: 50%;
      overflow: hidden;
      border: 4px solid var(--primary-color);
      width: 160px;
      height: 160px;
    }
    .founder-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
       filter: grayscale(1);
       border-radius: 50%;
        transform: scale(0.95);
    }.founder-img:hover img {
      transform: scale(0.5);
      transition: transform 0.3s ease;
      filter: grayscale(0);
    }
    .founder-bio {
      flex: 1 1 300px;
    }.founder-bio a{
      text-decoration: none;
    }

    .founder-section span {
     border: 2px solid white;

    }
   /* - Why Choose Us Feature Grid - */
    .feature-grid {
      background: #fff;
      padding: 2rem 1rem;
    }
    .feature-grid h2 {
      text-align: center;
      color:var(--primary-color);
    }
    .feature-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 2rem;

    }
    .feature-item {
      flex: 1 1 200px;
      background: #f9fafb;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      padding: 1.5rem;
      text-align: center;
    } .feature-item:hover{
    transform: translateY(-15px);
     box-shadow: 0 1px 2px #ee2a7b;
    }
    .feature-item i {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    /* Carousel -------------------------------------------------*/
    .carousel-section {
      padding: 2rem 1rem;
      text-align: center;
    }    .carousel-section  h2{
      color:var(--primary-color);
    }
    .carousel-container {
      max-width: 600px;
      margin: auto;
      position: relative;
    }
    .carousel-slide {
      display: none;
      font-size: 1.2rem;
      color: #222;
      border-radius: 10px;
      padding: 2rem;
     box-shadow: var(--shadow);
    }
    .carousel-slide.active {
      display: block;
    }
    .carousel-btn {
      background:var(--primary-color);
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 0.5rem 1rem;
      margin: 1rem 0.5rem;
      cursor: pointer;
      font-size: 1rem;
    }
    /* Timeline ------------------------------*/
    .timeline-section {
      background: #f3eded;
      padding: 2rem 1rem;
    }
    .timeline-section h2 {
      text-align: center;
      color: #f43f5e;
    }
    .timeline-list {
      max-width: 700px;
      margin: auto;
      list-style: none;
      padding: 0;
    }
    .timeline-list li {
      margin-bottom: 1.5rem;
    }

      /* Core Values ------------------------------------------------*/
    .core-values {
    background: #f3eded;
      padding: 2rem 1rem;
    }
    .core-values h2 {
      text-align: center;
      color:var(--primary-color);
    }
    .core-values-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: .5rem;
      margin-top: 2rem;
    }
    .core-value-item {
      flex: 1 1 220px;
      background: #f9fafb;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      padding: 1.5rem;
      text-align: center;
    }
    @media (max-width: 700px) {
      .feature-items, .core-values-items, .founder-section {
        flex-direction: column;
        gap: 1rem;
      }
      /* Founder Section -------------------------------*/
    .founder-section {
      text-align: center;
      padding: 1.5rem 1rem;
      gap: 1.5rem;
    }

    .founder-bio {
      flex: 1 1 300px;
      font-size: 12px;
    } .founder-section span {
     border: 2px solid white;
     font-size: 9px;

    }
    }

  </style>
</head>
<body>
   <!-- animated cursor ------------------->
 <div class="cursor"></div>
<!-- animated cursor end ---------------->
   <!--About page Header and navbar ----------------------------------------------------------------------------------------->
   <header>
      <div class="Logo"><img src="assets/Images/transparent-logo-campusxchange.png" title="CampusXchange Logo"></div>
   </header>
<?php include "components/header.php" ?>
  <!--about page Header and navbar end ----------------------------------------------------------------------------------------->
<br>
  <!-- Unique About Us Hero Section -->
  <section class="about-hero">
    <h1>Empowering Learners, Shaping Futures</h1>
    <p>CampusXchange is not just a platform—it's a movement to transform education and career growth. We blend creativity, technology, and mentorship to help you unlock your true potential.</p>
  </section>

  <!-- Founder & CEO Section -->
  <section class="founder-section">
    <div class="founder-img">
      <img src="assets/Images/pankaj-kumar-das.jpg" alt="Pankaj Kumar Das, Founder & CEO">
    </div>
    <div class="founder-bio">
      <h2>Pankaj Kumar Das</h2>
      <h4>Founder & CEO</h4>
      <p>Pankaj Kumar is a passionate educator and entrepreneur who founded CampusXchange to bridge the gap between academic learning and real-world skills. With a background in technology and a vision for inclusive growth, Priya leads the team to empower students, freelancers, and startups to achieve their dreams. Her commitment to mentorship and innovation drives CampusXchange's mission every day.</p>
<br>
    <a href="#"> <span style="background-color:#1877F2; padding: 5px; color: #fff;"> Facebook <i class="fa-brands fa-facebook"></i></span></a>
    <a href="#"> <span style="background:linear-gradient(to right, #6228d7,#ee2a7b,#f9ce34); padding:  5px; color: #fff;"> Instagram <i class="fa-brands fa-square-instagram"></i></span></a>
    <a href="#"> <span style="background-color:#0077B5; padding: 5px; color: #fff;"> Linkedin <i class="fa-brands fa-linkedin"></i></span></a>
    <a href="#"> <span style="background:linear-gradient(to right, #f43f5e, #6366f1); padding: 5px; color: #fff;"> Portfolio <i class="fa-solid fa-globe"></i></span></a>
    <a href="#"> <span style="background:linear-gradient(to right,#25D366); padding: 5px; color: #fff;"> WhatsApp <i class="fa-brands fa-whatsapp"></i></span></a>

    </div>
  </section>

  <!-- Why Choose Us Feature Grid -->
  <section class="feature-grid">
    <h2>Why Choose Us?</h2>
    <div class="feature-items">
      <div class="feature-item">
        <i class="fa-solid fa-lightbulb" style="color:#f43f5e;"></i>
        <h4>Innovative Learning</h4>
        <p>We use creative methods and real-world projects to make learning fun and effective.</p>
      </div>
      <div class="feature-item">
        <i class="fa-solid fa-users" style="color:#6366f1;"></i>
        <h4>Expert Mentors</h4>
        <p>Our team consists of industry professionals who guide you at every step.</p>
      </div>
      <div class="feature-item">
        <i class="fa-solid fa-rocket" style="color:#f43f5e;"></i>
        <h4>Career Launchpad</h4>
        <p>From internships to job-ready skills, we help you launch your dream career.</p>
      </div>
      <div class="feature-item">
        <i class="fa-solid fa-globe" style="color:#6366f1;"></i>
        <h4>Global Community</h4>
        <p>Join a vibrant network of learners, creators, and leaders from around the world.</p>
      </div>
    </div>
  </section>
<br>
  <!-- Mission & Vision Carousel Section -------------->
  <section class="carousel-section">
    <h2>Our Mission & Vision</h2>
    <br>
    <div class="carousel-container">
      <div class="carousel-slide active" id="slide1">
        <strong style="color: #6366f1;"><i class="fa-solid fa-bullseye"></i> </strong> To bridge the gap between theory and practice by providing hands-on learning, mentorship, and real-world opportunities for growth.
      </div>
      <div class="carousel-slide" id="slide2">
        <strong style="color: #6366f1;"><i class="fa-solid fa-eye"></i> </strong> To empower every learner and innovator with the skills, resources, and guidance needed to excel in the digital world.
      </div>
      <button class="carousel-btn" onclick="showSlide(1)">Mission</button>
      <button class="carousel-btn" onclick="showSlide(2)">Vision</button>
    </div>
  </section>

  <!-- CampusXchange Journey Timeline ---------------------------------->
  <section class="timeline-section">
    <h2>Our Journey</h2>
    <ul class="timeline-list">
      <li><strong style="color: #ee2a7b;">2023:</strong> CampusXchange founded with a vision to revolutionize learning.</li>
      <li><strong style="color: #ee2a7b;">2024:</strong> Expanded to offer curated notes, blogs, and assignments for students and professionals.</li>
      <li><strong style="color: #ee2a7b;">2024(end):</strong> Launched our first mentorship and internship programs.</li>
      <li><strong style="color: #ee2a7b;">2025:</strong> Built a thriving community and partnered with leading tech companies.</li>
    </ul>
  </section>

  <!-- Core Values Section -------------------------------------->
  <section class="core-values">
    <h2>Our Core Values</h2>
    <div class="core-values-items">
      <div class="core-value-item">
        <h4>Integrity</h4>
        <p>We believe in honesty, transparency, and ethical practices in everything we do.</p>
      </div>
      <div class="core-value-item">
        <h4>Collaboration</h4>
        <p>We foster teamwork and open communication to achieve shared goals.</p>
      </div>
      <div class="core-value-item">
        <h4>Growth</h4>
        <p>We encourage continuous learning and personal development for all.</p>
      </div>
      <div class="core-value-item">
        <h4>Innovation</h4>
        <p>We embrace creativity and new ideas to drive progress and impact.</p>
      </div>
    </div>
  </section>
    <!-- footer section  --------------------------------------------------------------------------------->
        <section class="Footer">
 <div class="fbox" id="lastfooter"><br>
  <h3>CampusXchange</h3>
<p>We are committed to building a dynamic learning ecosystem where learners read and create, build and grow. From expert-curated notes, to insider tips, to real-time tech assignments, and guided internship & mentorship programs, we help you go from theory to doing your life's best work. Whether you're a student who wants to conquer full-stack development, a freelancer who wants to refine SEO skills, or a startup who's looking for web help — CampusXchange is where you can begin and strategize to become smarter.</p>
   <br>
    <hr>
</div>
<!-- Quick Links -->
     <h3>Quick Links-</h3>
     <div  id="quicklinks">
     <a href="home" class="active">Home</a> <a href="services/web-development">Website Development</a>  <a href="services/seo">SEO</a>  <a href="handouts/notes">Notes</a>  <a href="handouts/blog">Blogs</a> <a href="handouts/assignment">Programming Assignment</a>  <a href="internship-program">Mentorship & Internship</a><a href="about" style="color: #1e0b0bff;">About</a><a href="lettalk">Let's Talk</a>
     </div>
    <br>
    <!-- Contact Links -->
      <div class="contact">
        <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-phone"></i></a> &nbsp;+91 9155726625
        <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-envelope"></i></a> &nbsp;info@campusxchange.com
        <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-location-dot"></i></a> &nbsp;Kishanganj ,Bihar(855115)
      </div>

      <div  id="Sociallinks">
        <a href="#Courses-section" title="Social Platform"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#about-section" title="Social Platform"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="#Results-section" title="Social Platform"><i class="fa-brands fa-facebook"></i></a>
        <a href="#Contact-section" title="Social Platform"><i class="fa-brands fa-youtube"></i></a>

      </div>
         <div  id="CopyRight">
       Copyright ©2025 CampusXchange. All Rights Reserved Designed By CampusXchange Team❤️
      </div>


        </section>
        <!-- fotter section end  here --------------------------------------------------------------------------------->
<script>
// Simple carousel for Mission & Vision
function showSlide(n) {
  document.getElementById('slide1').classList.remove('active');
  document.getElementById('slide2').classList.remove('active');
  document.getElementById('slide'+n).classList.add('active');
}
</script>
<script src="script.js"></script>
</body>
</html>
