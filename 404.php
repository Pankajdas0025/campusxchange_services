<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Primary Meta Tags -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>404 - Page Not Found | CampusXchange</title>
<meta name="title" content="404 - Page Not Found | CampusXchange">
<meta name="description" content="Oops! The page you are looking for doesn't exist. Explore internships, projects, and career opportunities at CampusXchange.">
<meta name="keywords" content="404, Page Not Found, CampusXchange, Internships, Projects, Career Opportunities">
<meta name="author" content="CampusXchange">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://campusxchange.in/404">
<meta property="og:title" content="404 - Page Not Found | CampusXchange">
<meta property="og:description" content="Oops! The page you are looking for doesn't exist. Discover internships, live projects, and opportunities at CampusXchange.">
<meta property="og:image" content="https://campusxchange.in/assets/og-image.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://campusxchange.in/404">
<meta property="twitter:title" content="404 - Page Not Found | CampusXchange">
<meta property="twitter:description" content="Oops! The page you are looking for doesn't exist. Explore internships, projects, and career opportunities at CampusXchange.">
<meta property="twitter:image" content="https://campusxchange.in/assets/og-image.jpg">

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
/* header for all pages  */
/*
.Logo{height: 100px;width:25vw;background-color:transparent;padding: 0;font-size:20px;font-style: normal;color: white;}
.Logo img{ height:100px; width:100%;} */
  main{
    height:500px;
    padding:30px 0;
  }.Eroorbox
  {
    width: 60%;
    height:60vh;
    margin:0 auto;
    align-self: center;
    align-content: center;
    text-align: center;
    padding: 15px;
    box-shadow:var(--shadow);
    background-color:white;
    border-radius: var(--radius);


  }.Eroorbox img{
    height: 200px;
    width: 200px;
  }.Eroorbox button
  {
    padding: 12px;
    background-color: var(--primary-color);
    color: #ffffff;
    border: none;
    border-radius: 5px;
  }.Eroorbox button:hover
  {
    background-color: var(--hoverbg);
    color: #ffffff;


  }


  @media screen and (max-width:700px)
  { main{
   height: auto;
  }
    .Eroorbox
  {
    width:100%;
    height:auto;
    margin:0;
    align-self: center;
    align-content: center;
    text-align: center;
    padding:0rem 2rem;


  }.Eroorbox img{
    height: 200px;
    width: 200px;
  }
  }
 </style>
</head>
<body>
   <!--Home page Header and navbar ----------------------------------------------------------------------------------------->
   <header>
  <div class="Logo"><img src="https://campusxchange.wuaze.com/assets/Images/campusxchange-logo-transparent.png" title="CampusXchange Logo"></div>
   </header>

<br>

<main>
    <div class="Eroorbox">
        <h1>Oops! Page Not Found (404)</h1>
                <img src="https://campusxchange.wuaze.com/assets/Images/404.svg" alt="404 Error Image" title="404 Error">
        <p>We're Sorry, but the page you requested isn't available right now. It might have been removed, renamed, or is temporarily unavailable.
<br>
Please try the following:</p>
<a href="https://campusxchange.wuaze.com/"><button>Go To Home Page !</button></a>
    </div>
</main>
<br>
<!-- fotter section  --------------------------------------------------------------------------------->
 <?php include "components/footer.php" ?>
<!-- fotter section end  ----------------------------------------------------------------------------->
<script src="/CX/script.js"></script>
</body>
</html>
