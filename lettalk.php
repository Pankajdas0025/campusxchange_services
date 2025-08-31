<?php
include "src/conn.php";
include "src/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Primary Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Let's Talk - CampusXchange</title>
  <meta name="title" content="Let's Talk - CampusXchange">
  <meta name="description" content="Have questions or ideas? Let's talk! Reach out to CampusXchange for collaboration, support, or services in web development, SEO, and explore mentorship and internship program">
  <meta name="keywords" content="contact CampusXchange, let's talk, connect with team, support CampusXchange, collaboration, CampusXchange contact ,CampusXchange location , CampusXchange email">
  <meta name="author" content="CampusXchange"/>
  <!-- -- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://campusxchange.in/">
  <meta property="og:title" content="Let's Talk - CampusXchange">
  <meta property="og:description" content="Join CampusXchange and explore internships, live projects, and opportunities to build your career. Apply online today!">
  <meta property="og:image" content="https://campusxchange.in/assets/og-image.jpg">

  <!-- -- Twitter - -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://campusxchange.in/">
  <meta property="twitter:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="twitter:description" content="CampusXchange helps students connect with internships, live projects, and career opportunities. 100% online and easy to apply!">
  <meta property="twitter:image" content="https://campusxchange.in/assets/og-image.jpg">

<link rel="stylesheet" href="styles/animation.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<!-- cdns-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Favicon  -------------------------------------------------------------------->
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
<style>

 :root {

  --primary-color: #6366f1;
  --secondary-color: #f43f5e;
  --bg-light: #f9fafb;
  --Lighttext-color: #000000;
  --darktext-color:white;
  --card-bg: #f3eded;
  --shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
  --radius: 0;
  --font-main: 'Poppins', sans-serif;
  --hoverbg :#555;
  --pSize:0.9rem;
  --border:2px dotted white;
}
  .contact-main {
    background: #f9fafb;
    padding: 3rem 1.5rem 2rem 1.5rem;
    width:90%;
    margin: 2rem auto 2rem auto;
    box-shadow: 0 2px 16px rgba(99,102,241,0.08);
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    align-items: flex-start;
  }
  .contact-info {
    flex: 1 1 320px;
    min-width: 260px;
  }
  .contact-info h2 {
    color: #6366f1;
    margin-bottom: 1rem;
  }
  .contact-info ul {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
  }
  .contact-info li {
    margin-bottom: 0.7rem;
    font-size: 1.08rem;
    color: #222;
    display: flex;
    align-items: center;
    gap: 0.7rem;
  }
  .contact-info li i {
    color: #6366f1;
    font-size: 1.2rem;
  }
  .branch {
    margin-top: 1.2rem;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(99,102,241,0.07);
    padding: 1rem 1rem 0.5rem 1rem;
  }
  .branch h4 {
    color: #f43f5e;
    margin-bottom: 0.5rem;
  }
  .contact-map {
    flex: 1 1 320px;
    min-width: 260px;
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(99,102,241,0.07);
    background: #fff;
    height: 380px;
    margin-top: 1.2rem;
  }
  .contact-map iframe {
    width: 100%;
    height: 100%;
    border: none;

  }
    .newsletter-unique {
    display: flex;
    flex-wrap: wrap;
    gap: 2.5rem;
    justify-content: center;
    align-items: stretch;
    width: 100%;
    margin: 0 auto 2rem auto;
    background: linear-gradient(120deg, #e0e7ff 60%, #f9fafb 100%);
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(99,102,241,0.08);
    padding: 2.5rem 1rem;
  }
  .newsletter-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(99,102,241,0.07);
    flex: 1 1 340px;
    min-width: 260px;
    max-width: 420px;
    padding: 2rem 1.2rem 1.2rem 1.2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    margin-bottom: 0;
    transition: transform 0.2s, box-shadow 0.2s;
    border-top: 6px solid #6366f1;
  }
  .newsletter-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 8px 32px rgba(99,102,241,0.13);
    border-top: 6px solid #f43f5e;
  }
  .newsletter-card .card-icon {
    font-size: 2.5rem;
    color: #6366f1;
    margin-bottom: 1rem;
    background: #f3eded;
    border-radius: 50%;
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(99,102,241,0.10);
  }
  .newsletter-card h3 {
    color: #f43f5e;
    margin: 0.5rem 0 1rem 0;
    text-align: center;
    font-size: 1.3rem;
    font-weight: 600;
  }
  .newsletter-card input, .newsletter-card textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #6366f1;
    font-size: 1rem;
    margin-bottom: 1rem;
    border-radius: 6px;
    background: #f9fafb;
    transition: border 0.2s;
  }
  .newsletter-card input:focus, .newsletter-card textarea:focus {
    border: 1.5px solid #f43f5e;
    outline: none;
  }
  .newsletter-card button {
    background: #6366f1;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 0.8rem 1.6rem;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(99,102,241,0.13);
    transition: background 0.2s, color 0.2s;
    margin-top: 0.5rem;
  }
  .newsletter-card button:hover {
    background: #f43f5e;
    color: #fff;
  }
  .newsletter-card .form-success {
    color: #22c55e;
    font-size: 1rem;
    margin-top: 0.5rem;
    margin-right: 25px;
    background-color: skyblue;
    color: black;
    display: none;

  }
  /* contact us newsletter section  ----------------------------*/
  .newsletter {
    display: flex;
    width: 100%;
    height: 500px;
    justify-content: center;

  }.contact-form-box {

    width: 40%;
    height: 450px;
    margin:25px 5%;

  }.contact-form-box h3 {
color: #f43f5e;
    margin: 0.5rem 0;
  }

  .contact-form-box input,textarea,button {
    width: 80%;
    padding: 0.8rem;
    border: 1px solid #6366f1;
    font-size: 1rem;
    margin:1.5% 10% 1.5% 0%;
  }.contact-form-box button {
 background-color: #f3eded;
  }
  .contact-form-box button:hover {
    background-color: #f43f5e;
    color: #ffffff;
  }

  .form-success {
display: block;
    color: #1f2421;
    font-size: 0.98rem;
    padding-left: 50px;
    margin-top: 0rem;
  }
  #newsletterForm
  {
    background-color: #6366f1;
    padding: 10%;
  }

  @media (max-width: 700px) {
.contact-main {

    padding:10px;
    width:100%;
    margin:0;
    box-shadow: 0 2px 16px rgba(99,102,241,0.08);
    display: block;

    gap: 0rem;
    align-items: flex-start;
  }
  .contact-info {

   width: 100%;
    font-size:1rem;

  }.contact-info li {
    margin-bottom: 0.7rem;
    font-size: 0.8rem;
    color: #222;
    display: flex;
    align-items: center;
     gap: 0.5rem;

  };
    .contact-map, .contact-info {
      min-width: 0;
      width: 100%;
    }
    .contact-map {
      height: 220px;
    }


  /* contact us newsletter section  ----------------------------*/
  .newsletter {
    display:block;
    width: 100%;
    height: auto;


  }.contact-form-box {

    width: 90%;
    height: 400px;
    margin:25px 5%;



  }.contact-form-box h3 {

    color:#f43f5e;
    margin: 0.5rem 0;
  }

  .contact-form-box input,textarea,button {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #6366f1;
    font-size: 1rem;
    margin:1% 0%;
  }
  #newsletterForm
  {
    background-color: #6366f1;
    padding: 10%;
    height: 300px;
  }
  #newsletterForm span {

    font-size:0.67rem;


  }
  }  @media (max-width: 900px) {
    .newsletter-unique {
      flex-direction: column;
      gap: 1.2rem;
      padding: 1.2rem 0.5rem;
    }
    .newsletter-card {
      min-width: 0;
      width: 100%;
      padding: 1.2rem 0.7rem;
    }
  }

</style>

<body>
   <!-- animated cursor ------------------->
 <div class="cursor"></div>
<!-- animated cursor end ---------------->
   <!--About page Header and navbar ----------------------------------------------------------------------------------------->
   <header>
      <div class="Logo"><img src="assets/Images/campusxchange-logo.svg" title="CampusXchange Logo"></div>
   </header>
<div class="topnav" id="myTopnav">
  <a href="home" class="active">Home</a>
   <div class="dropdown">
    <button class="dropbtn">Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="services/web-development">Website Development</a>
      <a href="services/seo">SEO</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Handouts
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="handouts/notes">Notes</a>
      <a href="handouts/blog">Blogs</a>
      <a href="handouts/assignment">Programming Assignment</a>
    </div>
  </div>
  <a href="internship-program">Mentorship & Internship</a>
  <a href="about">About</a>
  <a href="lettalk"  style="background-color: #555;">Let's Talk</a>
    <!--// mobile Togglebar ----------------------------------------------------------------------------------------->
 <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
  <!--about page Header and navbar end ----------------------------------------------------------------------------------------->
<br>
<main>
  <section class="contact-main">
  <div class="contact-info">
    <h2>Contact Us</h2>
    <ul>
      <li><i class="fa-solid fa-location-dot"></i> <strong>Head Office:</strong> Kishanganj, Bihar (855115), India</li>
      <li><i class="fa-solid fa-building"></i> <strong>Branch:</strong> Patna, Bihar (800001), India</li>
      <li><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> info@campusxchange.com</li>
      <li><i class="fa-solid fa-phone"></i> <strong>Mobile:</strong> +91 9155726625</li>
      <li><i class="fa-brands fa-whatsapp"></i> <strong>WhatsApp:</strong> +91 9155726625</li>
      <li><i class="fa-solid fa-globe"></i> <strong>Website:</strong> www.campusxchange.com</li>
    </ul>
    <div class="branch">
      <h4>Business Hours</h4>
      <p>Monday - Saturday: 9:00 AM to 7:00 PM<br>Sunday: Closed</p>
    </div>
  </div>
  <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441177.8354025553!2d87.56241976601278!3d25.974216198955848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e56d32defea4c3%3A0x26474b27ef370457!2sprimary%20school%20Jhangidighi!5e1!3m2!1sen!2sin!4v1754764411570!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="CampusXchange Location"></iframe>
  </div>
  </section>
  <br>
<!-- contact us newsletter section ----------------------------------------->
<section class="newsletter-unique">
  <div class="newsletter-card">
    <span class="card-icon"><i class="fa-solid fa-paper-plane"></i></span>
    <form class="contact-form" id="contactForm" autocomplete="off">
      <h3>Send Us a Message</h3>
      <input type="text" id="contactName" name="contactName" placeholder="Your Name" required>
      <input type="email" id="contactEmail" name="contactEmail" placeholder="Your Email" required>
      <input type="text" id="contactPhone" name="contactPhone" placeholder="Your Mobile (optional)">
      <textarea id="contactMsg" name="contactMsg" placeholder="Your Message" rows="4" required></textarea>
      <button type="submit">Send Message</button>
      <span class="form-success" id="formSuccess">Thank you! Your message has been sent.</span>
    </form>
  </div>

  <script>
document.getElementById("contactForm").addEventListener("submit", function(event){
  event.preventDefault();
  let name = document.getElementById("contactName").value;
  let email = document.getElementById("contactEmail").value;
  let number = document.getElementById("contactPhone").value;
  let sms = document.getElementById("contactMsg").value;
  let whatsappNumber = "919155726625"; // Apna WhatsApp number with country code
  let url = "https://wa.me/" + whatsappNumber + "?text="
            + "Hello, my name is " + name + "%0a"
            + "Email: " + email+ "%0a"
            + "Contact : " + number + "%0a"
            + "Message: " + sms+ "%0a"
            + "Please reply me for ny Query ?";
  window.open(url, "_blank").focus();
});
</script>

  <div class="newsletter-card">
    <span class="card-icon"><i class="fa-solid fa-bell" method="POST" ></i></span>
    <form class="contact-form" id="newsletterForm" method="POST" action="">
      <h3>Ready For New Updates</h3>
      <input type="email" id="newsletterEmail" name="contact_email" placeholder="Your Email" required>
      <button type="submit">Subscribe</button>
      <span class="form-success" id="newsletterSuccess"></span>

    </form>
      <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect and sanitize input
    $Email = trim($_POST['contact_email'] ?? '');
      if (empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        echo"<script>alert('Please enter a valid email address.');</script>";
    }


    // Prepare and execute insert query
        $stmt = $conn->prepare("INSERT INTO email_list (Emails) VALUES (?)");
        $stmt->bind_param("s",$Email);
    if ($stmt->execute())
  {
 echo"<script>alert('Thank You ');</script>";
  }
}
 ?>
  </div>


</section>
</main>
<br>
<!-- footer section  --------------------------------------------------------------------------------->
        <section class="Footer">
 <div class="fbox" id="lastfooter"><br>
  <h3>CampusXchange</h3>
<p>We are committed to building a dynamic learning ecosystem where learners read and create, build and grow. From expert-curated notes, to insider tips, to realtime tech assignments, and guided internship & mentorship programs, we help you go from theory to doing your life's best work. Whether you're a student who wants to conquer full-stack development, a freelancer who wants to refine SEO skills, or a startup who's looking for web help — CampusXchange is where you can begin and strategize to become smarter.</p>
   <br>
    <hr>
</div>
<!-- Quick Links  -->
     <h3>Quick Links-</h3>
     <div  id="quicklinks">
 <a href="home" class="active">Home</a> <a href="services/web-development">Website Development</a> <a href="services/seo">SEO</a><a href="handouts/notes">Notes</a><a href="handouts/blog">Blogs</a><a href="handouts/assignment">Programming Assignment</a>  <a href="internship-program">Mentorship & Internship</a>  <a href="about">About</a> <a href="lettalk"  style="background-color: #555;">Let's Talk</a>
     </div>
<br>
<!-- Contact Links  -->
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
         <div id="CopyRight">
       Copyright ©2025 CampusXchange. All Rights Reserved Designed By CampusXchange Team❤️
      </div>


        </section>
        <!-- fotter section end  here --------------------------------------------------------------------------------->
<script>
// Simple carousel for Mission & Vision
</script>
<script src="script.js"></script>

</body>
</html>
