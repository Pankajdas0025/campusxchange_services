

<?php
include "../src/conn.php";
include "../src/config.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
<!-- Primary Meta Tags -->
  <meta charset="UTF-8" />
    <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verified Intern | CampusXchange</title>
  <meta name="title" content="Mentorship & Remote Internship | CampusXchange">
  <meta name="description" content="CampusXchange helps students connect with internships, live projects, and career opportunities. 100% online and easy to apply!">
  <meta name="keywords" content="Technical Notes,Programming Assignment, SEO services,Web Development,Internship,Real Project">
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

<!-- styles ------------------->
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" href="../animation.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Favicon ------------------>
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">
<title>verified Intern</title>


<style>
    .verifed-section {
    background: linear-gradient(to right, #6366f1, #f43f5e );
    padding: 2rem 0.5rem 1.5rem 0.5rem;
    max-width: 600px;
    height:auto;
    margin: 2rem auto 2rem auto;
    box-shadow: 0 2px 16px rgba(99,102,241,0.08);
  }


  .intern-info {
    background: #fff;

    box-shadow: 0 2px 8px rgba(99,102,241,0.07);
    padding: 1.5rem 1rem;
    color: #222;
    margin-bottom: 1rem;
    text-align: left;
  }
  .verified-badge {
    display: inline-block;
    background: #22c55e;
    color: #fff;
    font-weight: bold;
    padding: 0.3rem 1rem;
    font-size: 1rem;
    margin-bottom: 1rem;
    box-shadow: 0 2px 4px rgba(34,197,94,0.12);
  }
  .intern-info strong {
    color: #6366f1;
    font-weight: 600;
    text-shadow: 1px 1px rgba(99,102,241,0.2);
  }
  .intern-info p {
    margin: 0.5rem 0;
    font-size: 1.08rem;
  }
  .intern-id {
    font-family: monospace;
    color: #f43f5e;
    font-size: 1.1rem;
  }.intern-info img {
    max-width: 120px;
    height: 40px;
    margin-top: 1rem;
    display:inline-block;

  }.intern-info a {
    color: #f43f5e;
    font-size: 1.1rem;
  }
  @media screen and (max-width:700px)
  {
  .verifed-section {
    margin: 0.2rem 0.1rem;
    box-shadow: 0 2px 16px rgba(99,102,241,0.08);
    padding: 0.2rem ;
  }#nverified .intern-info{
    height: 100vh;
  }


  }
</style>

</head>
<body>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Collect and sanitize input
    $Intern_ID = trim($_GET['internid'] ?? '');
    $sql_select = "SELECT *FROM verified_intern WHERE Intern_ID='$Intern_ID' ";
    $response = $conn->query($sql_select);

    if($response)
    {
      if($response->num_rows !=0)

      {

$row = $response->fetch_assoc();
$Name    = htmlspecialchars($row['Name'] ?? '', ENT_QUOTES, 'UTF-8');
$Domain  = htmlspecialchars($row['Domain'] ?? '', ENT_QUOTES, 'UTF-8');
$Time    = htmlspecialchars($row['Duration'] ?? '', ENT_QUOTES, 'UTF-8');
$Intern_ID   = htmlspecialchars($row['Intern_ID'] ?? '', ENT_QUOTES, 'UTF-8');
$College = htmlspecialchars($row['College'] ?? '', ENT_QUOTES, 'UTF-8');
$Project_link =  htmlspecialchars($row['Project_Link'] ?? '', ENT_QUOTES, 'UTF-8');


        echo "<section class='verifed-section' id='verified'>
    <div class='intern-info'>
     <div class='verified-badge'><i class='fa-solid fa-certificate'></i> Verified by CampusXchange</div>
      <p><strong>Name:</strong>  $Name
      <p><strong>Domain:</strong> $Domain
      <p><strong>Duration:</strong>  $Time
      <p><strong>Internship ID:</strong> <span class='intern-id'>$Intern_ID</span></p>
      <p><strong>College:</strong>  $College
      <br><strong><a href='$Project_link'>View Projects <i class='fa-solid fa-eye'></i></a></strong>
      <p><strong>Status:</strong> <span style='color:#22c55e;font-weight:bold;'>Active & Verified</span></p>
      <p><strong>About:</strong> <b>$Name</b> has successfully completed all requirements for the CampusXchange internship program in  $Domain, demonstrating strong technical and teamwork skills. All credentials have been verified by the CampusXchange team.</p>
      <img src='../assets/Images/campusxchange-logo.svg' alt='campusxchange-logo'> <img src='../assets/Images/founder-sign.jpg' alt='campusxchange-logo'>   <img src='../assets/Images/verified-stamp.jpg' alt='campusxchange-logo'>
      <a href='../internship-program' aria-label='know more about internship program offer by campusxchange'><p>Know More About CampusXchange</p></a>

    </div>
</section>";

      }
        else
    {
        echo " <section class='verifed-section' id='nverified'>
    <div class='intern-info'>
     <p><strong>The Intern is Not registred !</strong></p>
      <a href='../internship-program' aria-label='know more about internship program offer by campusxchange'><p>Know More About CampusXchange</p></a>

    </div>
</section>";
    }

    }



  }
  include("../feedback.php");
 ?>

<script src="../script.js"></script>
</body>
</html>
