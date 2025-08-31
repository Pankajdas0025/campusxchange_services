<?php
include "../src/conn.php";
include "../src/config.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
<!-- Primary Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Internship Apply - CampusXchange</title>
  <meta name="title" content="Internship Apply - CampusXchange">
  <meta name="description" content="Start your career journey with CampusXchange internships. Apply now for skill-based internship opportunities that help you gain experience and grow professionally.">
  <meta name="keywords" content="internship apply, student internships, CampusXchange internships, apply internship online, career opportunities, skill development">
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
<title>Apply Internship | CampusXchange</title>
<style>
.apply-form-section {
background: #f9fafb;

width: 100%;
height: 800px;
background: linear-gradient(to right, #6366f1, #f43f5e );
margin: 2rem auto;
box-shadow: 0 2px 8px rgba(0,0,0,0.07);
display: flex;


}.box
{

  height:80%;
  width: 40%;
  margin:0 5%;
  padding: 2rem 1rem;

  overflow: hidden;
}.box #sharebox {
overflow: hidden;
position:absolute;
font:  sans-serif;
height: 40%;
width:15%;
padding: 1rem ;
  left: 2rem;
  top: 450px;

}.box #sharebox a {
  text-decoration: none;
  transition: background-color 0.3s ease;
}
.box #sharebox span
{
  width: 100%;
  margin-top:20px;
  display: block;
  transform: translateX(-85px);
  transition: 2s;

}.box #sharebox span:hover
{
  transform: translateX(0);

}

.box iframe {
  width: 100%;
  height: 100%;
  border: none;
}
.apply-form-section h2 {
text-align: center;
color: #6366f1;
margin-bottom: 1rem;
}
.apply-form {
display: flex;
flex-direction: column;
gap: 1rem;
}
.apply-form input, .apply-form select {
padding: 0.7rem;
border-radius: 5px;
border: 1px solid #ccc;
font-size: 1rem;
}.apply-form input:focus, .apply-form select:focus {
border:2px solid #6366f1;
outline: none;
}

.apply-form button {
background: #6366f1;
color: #fff;
border: none;
border-radius: 5px;
padding: 0.8rem;
font-size: 1rem;
cursor: pointer;
margin-top: 0.5rem;
transition: background 0.2s;
}
.apply-form button:hover {
background: #f43f5e;
}
.form-error {
color: #f43f5e;
font-size: 0.95rem;
margin-top: -0.5rem;
margin-bottom: 0.5rem;
display:block;
background-color: #dde8df;
padding: 10px;
}

/* mobile response  --------------------------------------*/
@media (max-width: 700px) {
.apply-form-section {
width: 100%;
display: block;
height: auto;
}.box {

width: 100%;
margin: 0;
}.box #sharebox {
overflow: hidden;
position: relative;
font:  sans-serif;
height:auto;
width:100%;
left: 0;
padding: 0rem ;
top: 0px;


}.box #sharebox a {
  text-decoration: none;
  transition: background-color 0.3s ease;

}
.box #sharebox span
{
  width: 100%;
  margin-top:20px;
  display: block;
  transform: translateX(-230px);
  transition: 2s;

}.box #sharebox span:hover
{
  transform: translateX(0);

}
.apply-form  input{
  margin: 0;
}
}

@media (min-width:725px) and (max-height: 1100px) {
.apply-form-section {
  height: 60%;
}
.box {
height: auto;

}
.box #sharebox {
height:50%;
width:50%;
padding: 0rem ;
  left: 2rem;
  top: 450px;


}
.box #sharebox span
{
  width: 80%;
  margin-top:20px;
  transform: translateX(-200px);

}
}
</style>
</head>
<body>
<div class="cursor"></div>
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
<br>
<!-- Upcoming Batch section  ----------------------->
<section style="background:linear-gradient(90deg,#6366f1,#f43f5e);color:#fff;padding:1.5rem 1rem;text-align:center;box-shadow:0 2px 8px #6366f133;margin-bottom:1.5rem;">
  <h2 style="margin:0;font-size:2rem;letter-spacing:1px;"><i class="fa-solid fa-calendar-days"></i> Upcoming Batch</h2>
  <p style="font-size:1.0rem;margin:0.7rem 0 0 0;">Next internship batch starts <b>September 10, 2025</b>.<br>Apply now to reserve your spot and kickstart your tech journey with CampusXchange!</p>
</section>
<!-- Upcoming Batch section  end here ----------------------->
<section class="apply-form-section">
  <div class="box">
    <div id="sharebox">

    <a href="https://www.facebook.com/sharing/share-offsite/?url=https://www.campusxchange.com/"> <span style="background-color:#1877F2; padding: 5px; color: #fff;">Share on  Facebook <i class="fa-brands fa-facebook"></i><a href=""> </span></a>
    <a href="https://www.instagran.com/sharing/share-offsite/?url=https://www.campusxchange.com/"> <span style="background:linear-gradient(to right, #6228d7,#ee2a7b,#f9ce34); padding:  5px; color: #fff;">Share on  Instagram <i class="fa-brands fa-square-instagram"></i></span></a>
    <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://www.campusxchange.com"> <span style="background-color:#0077B5; padding: 5px; color: #fff;">Share on  Linkedin <i class="fa-brands fa-linkedin"></i></span></a>
    <a href="#"> <span style="background:linear-gradient(to right, #f43f5e, #6366f1); padding: 5px; color: #fff;">Share on  Whatsapp <i class="fa-brands fa-whatsapp"></i></span></a>

    </div>

    <iframe src="https://lottie.host/embed/61f2b338-e89e-462f-b6a5-1f8bde8bd31e/ESPJKDEeRZ.lottie"></iframe>
  </div>

  <div class="block box">
<h2 style="background-color: #f43f5e; color: #ffffff;"><i class="fa-solid fa-file-signature">  </i>Apply for Internship</h2>
<form class="apply-form" id="internshipApplyForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<input type="text" name="intern_name" id="intern_name" placeholder="Full Name" onchange=" Check_Intername() " required>
<input type="email" name="intern_email" id="intern_email" placeholder="Email Address" required>
<input type="text" name="intern_phone" id="intern_phone" placeholder="Whatsapp number" maxlength="10" required>
<select name="intern_domain" id="intern_domain" required>
<option value="" disabled selected style="opacity: 0.9; color: #757c76;">Select Internship Field</option>
<option value="Frontend Development">Frontend Development</option>
<option value="Full-stack Development">Full-stack Development</option>
<option value="Web Development in PHP">Web Development in PHP</option>
<option value="SEO">SEO</option>
<option value="C Programming">C Programming</option>
<option value="Generative AI">Generative AI</option>
<option value="Social media marketing">Social media marketing</option>
</select>
<select name="intern_duration" id="intern_duration" required>
<option value="" disabled selected style="opacity: 0.9; color: #757c76;">Select Internship Duration</option>
<option value="1 Month">1 Month</option>
<option value="45 Days">45 Days</option>
<option value="2 Months">2 Months</option>
</select>
<input type="text" name="intern_college" id="intern_college" placeholder="Your college name" required>
<input type="text" name="intern_location" id="intern_location" placeholder="Where are you from ?" required>
<select name="intern_source" id="intern_source" required>
<option value="" disabled selected style="opacity: 0.9; color: #757c76;">How you know about CampusXchange</option>
<option value="Social Media">Social Media</option>
<option value="Friends">Friends</option>
<option value="College">College</option>
<option value="Other">Other</option>
</select>
<span class="form-error" id="Error_sms"></span>
<input type="submit" value="Apply">
</form>
  </div>

  <!-- Apply intern form data into databae table  ----------------------------------------->
  <?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Include PHPMailer library files
// require '../PHPMailer/src/PHPMailer.php';
// require '../PHPMailer/src/SMTP.php';
// require '../PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // Collect and sanitize input
    $Name     = htmlspecialchars(trim($_POST['intern_name'] ?? ''), ENT_QUOTES, 'UTF-8');
    $Email    = filter_var(trim($_POST['intern_email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $Whatsapp = htmlspecialchars(trim($_POST['intern_phone'] ?? ''), ENT_QUOTES, 'UTF-8');
    $Domain   = htmlspecialchars(trim($_POST['intern_domain'] ?? ''), ENT_QUOTES, 'UTF-8');
    $Duration = htmlspecialchars(trim($_POST['intern_duration'] ?? ''), ENT_QUOTES, 'UTF-8');
    $College  = htmlspecialchars(trim($_POST['intern_college'] ?? ''), ENT_QUOTES, 'UTF-8');
    $Address  = htmlspecialchars(trim($_POST['intern_location'] ?? ''), ENT_QUOTES, 'UTF-8');

    $Errors = [];

    // Server-side validation
    if (empty($Name) || !preg_match("/^[a-zA-Z\s]+$/", $Name)) {
        $Errors[] = "Please enter a valid name.";
    }
    if (empty($Whatsapp) || !preg_match("/^[0-9]{10}$/", $Whatsapp)) {
        $Errors[] = "Please enter a valid 10-digit mobile number.";
    }
    if (empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $Errors[] = "Please enter a valid email address.";
    }
    if (empty($Address)) {
        $Errors[] = "Address is required.";
    }
    if (empty($Domain)) {
        $Errors[] = "Please select website type.";
    }
    if (empty($Duration)) {
        $Errors[] = "Please select a plan type.";
    }
    if (empty($College)) {
        $Errors[] = "Please select a plan type.";
    }


    if (empty($Errors)) {
        // Prepare and execute insert query
        $stmt = $conn->prepare("INSERT INTO applied_intern (Name , Email , Whatsapp_No , Domain , Duration , College , Address) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $Name, $Email, $Whatsapp, $Domain, $Duration, $College, $Address);

    if ($stmt->execute()) {


    $subject = "CLENT_FORM_TESTING";

    $message = " <body style='margin: 0; padding:2px; background-color: #f4f4f4; font-family: Arial, sans-serif; line-height: 1.2; color: #333;'>
    <div style='max-width: 1000px; margin: auto; padding: 15px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);'>

        <img src='https://pankajdas0025.github.io/PORTFOLIO/Images/client_email_banner.png' height='auto' width='100%' style='margin-top: 25px;font-size:2rem;'>
        <h1 style='color: #ffffff;padding:10px;height:150px; background: linear-gradient(to right, #6366f1,#f43f5e); text-align: center; font-size:1.5rem;'>🎉 Hello
            <br>You are looking for a website 🌐
            <br><p style='font-size: 1rem;'>$Name</p>
        </h1>

        <div style='background-color: #ecf0f1; padding: 10px; border-radius: 5px; margin-top: 20px;'>
Thanks for reaching out to CampusXchange—where ideas become digital realities. Whether you're launching a startup, showcasing your brand, or building a personal portfolio, our expert team is ready to craft a website that’s fast, functional, and uniquely yours.
            <p>🌟 <strong>Our Support Team will contact you within 24 Hr.</strong></p>
            <p>Be Happy with CampusXchange</p>
        </div>

        <div style='margin-top: 30px; font-size: 0.9em; color: #555; border-top: 1px solid #ddd; padding-top: 20px;'>
            <p>Explore oue social Handle</p>
            <ul style='padding-left: 20px;'>
                <li>LinkedIn: <a href='#' style='color: #2980b9;'>CampusXchange</a></li><br>
                <li>Telegram: <a href='https://t.me/CampusXchange' target='_blank' style='color: #2980b9;'>https://t.me/CampusXchange</a></li><br>
                <li>Email: <a href='#' style='color: #2980b9;'>support@CampusXchange</a></li><br>
                <li>Website: <a href='https://pankajdas0025.github.io/CampusXchange/' target='_blank' style='color: #2980b9;'>www.CampusXchange.org</a></li><br>
            </ul>
        </div>
    </div>
    </body>";

// Send email using mail()
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <pd5569121@gmail.com>' . "\r\n";


mail($Email,$subject,$message,$headers);

    // // Send email using PHPMailer
    // $mail = new PHPMailer(true);

    // try {
    //     // SMTP configuration
    //     $mail->isSMTP();
    //     $mail->Host       = 'smtp.gmail.com';
    //     $mail->SMTPAuth   = true;
    //     $mail->Username   = 'pd5569121@gmail.com'; // Gmail ID
    //     $mail->Password   = 'carp uidg qexa uvyr';          // App password, not real password
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Port       = 465;
    //     PHPMaler :: ENCRYPTION_|STARTTLS;

    //     // Email settings
    //     $mail->setFrom('pd5569121@gmail.com');
    //     $mail->addAddress($email);

    //     $mail->isHTML(true);
    //     $mail->Subject = $subject;
    //     $mail->Body    = $message;

    //     $mail->send();

    // }
    // catch (Exception $e) {
    //     echo "❌ Email could not be sent. Error: {$mail->ErrorInfo}";
    // }


        echo "<script>
             setTimeout(() => {
            alert('✅Your Apllication has been Submitted !');
            window.location.href='apply';



      }, 4000);


        </script>";
                $stmt->close();
    }  else
    {

        echo "<script>

            document.getElementById('Error_sms').innerHTML='Something Error';


        </script>";
    }
    }




else {

        // Show validation errors
        foreach ($Errors as $error) {
            echo "<script> document.getElementById('Error_sms').innerHTML='$error';</script>";
        }
    }
}

  ?>
</section>
<br>
<!-- footer section start from here  ------------------------------------------------->
<section class="Footer">
<div class="fbox" id="lastfooter"><br>
<h3>CampusXchange</h3>
<p>We are committed to building a dynamic learning ecosystem where learners read and create, build and grow. From expert-curated notes, to insider tips, to real-time tech assignments, and guided internship & mentorship programs, we help you go from theory to doing your life's best work. Whether you're a student who wants to conquer full-stack development, a freelancer who wants to refine SEO skills, or a startup who's looking for web help — CampusXchange is where you can begin and strategize to become smarter.</p>
<br>
<hr>
</div>
<!-- Quick links -->
<h3>Quick Links-</h3>
<div id="quicklinks">
<a href="../home" class="active">Home</a><a href="../services/web-development">Website Development</a><a href="../services/seo">SEO</a><a href="../handouts/notes">Notes</a><a href="../handouts/blog">Blogs</a><a href="../handouts/assignment">Programming Assignment</a><a href="apply">Apply </a><a href="verification">Verification</a><a href="../internship-program">Mentorship & Internship</a><a href="../about">About</a><a href="../lettalk">Let's Talk</a>
</div>
<br>
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
<script>
// internship apply form validation start.................................................

const applyError = document.getElementById('Error_sms');
const Internname = document.getElementById('intern_name');
const Internemail = document.getElementById('intern_email');
const Internmob = document.getElementById('intern_phone');
const Interndomain = document.getElementById('intern_domain');
const Internduration = document.getElementById('intern_duration');
const Interncollege = document.getElementById('intern_college');
const Interncity = document.getElementById('intern_location');
const Internsource = document.getElementById('intern_source');


Internname.addEventListener('change', () => {
const Iname = Internname.value.trim();
// Check if the Internname input is empty
if (Iname === "") { applyError.innerHTML = "Please enter your name.";}
else if (!/^[a-zA-Z\s]{4,}$/.test(Iname)) {
applyError.innerHTML = "Please enter a valid name (letters only, min 4 characters).";
Internname.style.color = "red";
setTimeout(() => {
applyError.innerHTML = "";
Internname.value = "";
Internname.style.color = "black";
}, 3000);
} else {
applyError.innerHTML = "";
}
});


Internemail.addEventListener('change', () => {
const Iemail = Internemail.value.trim();
// Check if the Internemail input is empty
if (Iemail === "") { applyError.innerHTML = "Please enter your email.";}
else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(Iemail)) {
applyError.innerHTML = "Please enter a valid email address.";
Internemail.style.color = "red";
setTimeout(() => {
applyError.innerHTML = "";
Internemail.value = "";
Internemail.style.color = "black";
}, 3000);
} else {
applyError.innerHTML = "";
}
});

Internmob.addEventListener('change', () => {
const Imob = Internmob.value.trim();
// Check if the Internmob input is empty
if (Imob === "") { applyError.innerHTML = "Please enter your mobile number.";}
else if (!/^\d{10}$/.test(Imob)) {
applyError.innerHTML = "Please enter a valid 10-digit mobile number.";
Internmob.style.color = "red";
setTimeout(() => {
applyError.innerHTML = "";
Internmob.value = "";
Internmob.style.color = "black";
}, 3000);
} else {
applyError.innerHTML = "";
}
});

Interndomain.addEventListener('change', () => {
const Idomain = Interndomain.value.trim();
// Check if the Interndomain input is empty
if (Idomain === "") { applyError.innerHTML = "Please select your internship field."; return false;}
else {
applyError.innerHTML = "";
}
});

Internduration.addEventListener('change', () => {
const Iduration = Internduration.value.trim();
// Check if the Internduration input is empty
if (Iduration === "") { applyError.innerHTML = "Please select your internship duration.";}
else {
applyError.innerHTML = "";
}
});

Interncollege.addEventListener('change', () => {
const Icollege = Interncollege.value.trim();
// Check if the Interncollege input is empty
if (Icollege === "") { applyError.innerHTML = "Please enter your college name.";}
else if (!/^[a-zA-Z\s]{2,}$/.test(Icollege)) {
applyError.innerHTML = "Please enter a valid college name (letters only).";
Interncollege.style.color = "red";
setTimeout(() => {
applyError.innerHTML = "";
Interncollege.value = "";
Interncollege.style.color = "black";
}, 3000);
} else {
applyError.innerHTML = "";
}
});

Interncity.addEventListener('change', () => {
const Icity = Interncity.value.trim();
// Check if the Interncity input is empty
if (Icity === "") { applyError.innerHTML = "Please enter your city.";}
else if (!/^[a-zA-Z\s]{2,}$/.test(Icity)) {
applyError.innerHTML = "Please enter a valid city name (letters only).";
Interncity.style.color = "red";
setTimeout(() => {
applyError.innerHTML = "";
Interncity.value = "";
Interncity.style.color = "black";
}, 3000);
} else {
applyError.innerHTML = "";
}
});
Internsource.addEventListener('change', () => {
const Isource = Internsource.value.trim();
// Check if the Internsource input is empty
if (Isource === "") { applyError.innerHTML = "Please select how you know about CampusXchange.";}
else {
applyError.innerHTML = "";
}
});
</script>

</body>
</html>