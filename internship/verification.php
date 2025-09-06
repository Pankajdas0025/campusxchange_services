


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Primary Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verification -  CampusXchange Secure Access</title>
  <meta name="title" content="Verification -  CampusXchange Secure Access">
  <meta name="description" content="Secure your CampusXchange experience with account verification. Verify your internship certificate.">
  <meta name="keywords" content="account verification, secure login, CampusXchange verification, student account security, verify identity, campusxchange certificate-verification">
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
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" href="../animation.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- favicon- -->
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">
<title>Certificate Verification</title>


<style>
  .verify-section {
  background: linear-gradient(to right, #6366f1, #f43f5e );
    padding: 2.5rem 1rem 2rem 1rem;
    max-width: 600px;
      height: 400px;
    margin: 2rem auto 2rem auto;
    box-shadow: 0 2px 16px rgba(99,102,241,0.08);
  }
  .verify-section h2 {
    text-align: center;
    color: #ffffff;
    margin-bottom: 1.5rem;
  }
  .verify-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .verify-form input {
    padding: 0.7rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 1rem;
  }
  .verify-form button {
    background: #6366f1;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 0.8rem;
    font-size: 1rem;
    cursor: pointer;
    margin-top: 0.5rem;
    font-weight: 600;
    transition: background 0.2s;
  }
  .verify-form button:hover {
    background: #f43f5e;
  }
  .verify-error {
    color: #ffffffff;
    font-size: 0.98rem;
    margin-bottom: 0.5rem;
    display:block;
    text-align: center;

  }
</style>

</head>
<body>
   <!-- animated cursor ------------------->
 <div class="cursor"></div>
<!-- animated cursor end ---------------->
 <!-- header section  -------------------------------------l̥------------------->
<header>
    <div class="Logo"><img src="../assets/Images/campusxchange-logo.svg" title="CampusXchange Logo"></div></header>
<div class="topnav" id="myTopnav">
  <a href="../home" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="../services/web-development">Website Development</a>
      <a href="../services/seo">SEO</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Handouts<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="../handouts/notes">Notes</a>
      <a href="../handouts/blog">Blogs</a>
      <a href="../handouts/assignment">Programming Assignment</a>
    </div>
  </div>
    <div class="dropdown">
    <button class="dropbtn">Mentorship & Internship<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="apply">Apply </a>
      <a href="verification">Verification</a>
      <!-- <a href="internportal.html">Intern Portal</a> -->
      <a href="../internship-program">Mentorship & Internship</a>
    </div>
  </div>
  <a href="../about">About</a>
  <a href="../lettalk">Let's Talk</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
 <!-- header section end here-------------------------------------------------------->
<section class="verify-section">
  <h2> <i class="fa-solid fa-file"></i> Internship Verification </h2>
  <form class="verify-form" id="verifyForm" action="verifiedintern.php" method="GET">
    <input type="text" id="internId" name="internid" placeholder="Enter Internship ID" maxlength="l5" required>
    <button type="submit"  onclick="return ChekID()">Verify</button>
    <span class="verify-error" id="verifyError"></span>
  </form>
  <script>

    const Ifield = document.querySelector("#internId");
    const Error = document.querySelector("#verifyError");

    function ChekID()
    {

    if(Ifield.value.length > 15 || Ifield.value.length < 10)
    {
        Error.innerHTML = "Enter  a valid internship ID";

        setTimeout(() => {
         Error.innerHTML = "";
         Ifield.value = "";
         Ifield.style.color = "black";
           return false;
        }, 2000);

    }
    else
    {
        Error.innerHTML = "<i>Fetching data ....</i>";
        setTimeout(() =>{
        Error.innerHTML = "";
        document.getElementById("verifyForm").submit(); // form ko 4 sec baad submit karo
        }, 4000);

    }
    return false;
   }
  </script>
</section>
<br>
<section class="Footer">
  <div class="fbox" id="lastfooter"><br>
    <h3>CampusXchange</h3>
    <p>We are committed to building a dynamic learning ecosystem where learners read and create, build and grow. From expert-curated notes, to insider tips, to real-time tech assignments, and guided internship & mentorship programs, we help you go from theory to doing your life's best work. Whether you're a student who wants to conquer full-stack development, a freelancer who wants to refine SEO skills, or a startup who's looking for web help — CampusXchange is where you can begin and strategize to become smarter.</p>
    <br>
    <hr>
  </div>
  <!-- Quick or important link -->
  <h3>Quick Links-</h3>
  <div id="quicklinks">
  <a href="../home" class="active">Home</a> <a href="../services/web-development">Website Development</a>  <a href="../services/seo">SEO</a> <a href="../handouts/notes">Notes</a> <a href="../handouts/blog">Blogs</a> <a href="../handouts/assignment">Programming Assignment</a> <a href="apply">Apply </a>  <a href="verification">Verification</a> <a href="../internship-program">Mentorship & Internship</a>  <a href="../about">About</a>  <a href="../lettalk">Let's Talk</a>
  </div>
<!-- contact links -->
  <div class="contact">
    <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-phone"></i></a> &nbsp;+91 9155726625
    <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-envelope"></i></a> &nbsp;info@campusxchange.com
    <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-location-dot"></i></a> &nbsp;Kishanganj ,Bihar(855115)
  </div>
  <div id="Sociallinks">
    <a href="#Courses-section" title="Social Platform"><i class="fa-brands fa-linkedin"></i></a>
    <a href="#about-section" title="Social Platform"><i class="fa-brands fa-square-instagram"></i></a>
    <a href="#Results-section" title="Social Platform"><i class="fa-brands fa-facebook"></i></a>
    <a href="#Contact-section" title="Social Platform"><i class="fa-brands fa-youtube"></i></a>
  </div>
  <div id="CopyRight">
    Copyright ©2025 CampusXchange. All Rights Reserved Designed By CampusXchange Team❤️
  </div>
</section>
<script src="../script.js"></script>
</body>
</html>
