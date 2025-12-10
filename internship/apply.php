<?php
include "../src/conn.php";
include "../src/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Primary Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Internship Apply - CampusXchange</title>
  <meta name="title" content="Internship Apply - CampusXchange ">
  <meta name="description" content="Start your career journey with CampusXchange internships. Apply now for skill-based internship opportunities that help you gain experience and grow professionally.">
  <meta name="keywords" content="internship apply, student internships, CampusXchange internships, apply internship online, career opportunities, skill development , web development internship, marketing internship, tech internships, internship programs, professional growth">
  <meta name="author" content="CampusXchange"/>
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://campusxchange.wuaze.com/internship/apply">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://campusxchange.wuaze.com/internship/apply">
  <meta property="og:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="og:description" content="Join CampusXchange and explore internships, live projects, and opportunities to build your career. Apply online today!">
  <meta property="og:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-internshipjpeg">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://campusxchange.wuaze.com/internship/apply/">
  <meta property="twitter:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="twitter:description" content="CampusXchange helps students connect with internships, live projects, and career opportunities. 100% online and easy to apply!">
  <meta property="twitter:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-internship.jpg">

  <!-- styles -->
  <link rel="stylesheet" href="../style.css" type="text/css">
  <link rel="stylesheet" href="../animation.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- favicon- -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">
  <style>

    :root

    {

  --primary-color: #263F5A;
  --secondary-color:#F8627B;
    }
.apply-form-section {

width: 100%;
height: 800px;
margin: 2rem auto;
display: flex;

}.box
{
  height:80%;
  width: 40%;
  margin:0 5%;
  padding: 2rem 1rem;
  overflow: hidden;
  border: 1px solid black;
  box-shadow:  0 8px 30px rgba(2,6,23,0.08);
}
.box img{
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

}
</style>
</head>
<body>
<?php include "../components/header.php" ?>
<br>
<!-- Upcoming Batch section  ----------------------->
<section style="color:#fff;padding:1.5rem 1rem;text-align:center;box-shadow:0 2px 8px #6366f133;margin-bottom:1.5rem; width: 90; margin: auto 5%;">
  <h2 style="margin:0;font-size:2rem;letter-spacing:1px;"><i class="fa-solid fa-calendar-days"></i> Upcoming Batch</h2>
  <p style="font-size:1.0rem;margin:0.7rem 0 0 0; color:black;">Next internship batch starts <b>Coming soo...</b>.<br>Apply now to reserve your spot and kickstart your tech journey with CampusXchange!</p>
</section>
<!-- Upcoming Batch section  end here ----------------------->
<section class="apply-form-section">
  <div class="box" style="border: none;">

    <img src="../assets/Images/internship-apply.png"></img>
  </div>

  <div class="box">
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
<!-- <option value="Generative AI">Generative AI</option> -->
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
<input type="submit" value="Apply" disabled>
</form>
  </div>


<!-- Apply intern form data into database ----------------------------------------->

<?php
// Include PHPMailer library files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
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
    if (empty($Address)) $Errors[] = "Address is required.";
    if (empty($Domain)) $Errors[] = "Please select a domain type.";
    if (empty($Duration)) $Errors[] = "Please select a duration.";
    if (empty($College)) $Errors[] = "Please enter your college name.";

    // If validation errors exist
    if (!empty($Errors)) {
        echo "<div id='Error_sms' style='color:red;'>" . implode("<br>", $Errors) . "</div>";
        exit;
    }

    // Prepare database insertion
    $stmt = $conn->prepare("INSERT INTO applied_intern (Name, Email, Whatsapp_No, Domain, Duration, College, Address) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $Name, $Email, $Whatsapp, $Domain, $Duration, $College, $Address);

    if ($stmt->execute()) {
        // Email content
        $subject = "✅ CampusXchange Internship Application Received!";
        $message = "
        <body style='margin:0; padding:10px; font-family: Arial,sans-serif; background:#f4f4f4; color:#333;'>
            <div style='max-width:600px; margin:auto; padding:15px; background:#fff; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1);'>
                <h2 style='color:#6366f1;'>Hello $Name 🎉</h2>
                <p>Thank you for applying for an internship in the <strong>$Domain</strong> domain. Our support team will contact you within 24 hours.</p>
                <p><strong>Details you submitted:</strong></p>
                <ul>
                    <li>Name: $Name</li>
                    <li>Email: $Email</li>
                    <li>Phone: $Whatsapp</li>
                    <li>Domain: $Domain</li>
                    <li>Duration: $Duration</li>
                    <li>College: $College</li>
                    <li>Address: $Address</li>
                </ul>
                <p>Be Happy with CampusXchange!</p>
                <hr>
                <p style='font-size:0.9em; color:#555;'>Visit our website:
                <a href='https://campusxchange.wuaze.com/' target='_blank'>CampusXchange</a></p>
            </div>
        </body>";

        // Send email via PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'campusxchangeservices@gmail.com';
            $mail->Password   = $app;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('campusxchangeservices@gmail.com', 'Support CampusXchange');
            $mail->addAddress($Email);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->send();

            echo "<script>
                alert('✅ Thank you! Your internship details have been submitted successfully.');
                window.location.href='apply';
            </script>";

        } catch (Exception $e) {
            echo "<script>
                alert('❌ Email could not be sent. Error: " . addslashes($mail->ErrorInfo) . "');
                window.location.href='apply';
            </script>";
        }

        $stmt->close();

    } else {
        echo "<div id='Error_sms' style='color:red;'>❌ Something went wrong while saving your data.</div>";
    }
}
?>


</section>
<!-- footer section start from here  ------------------------------------------------->
<?php include "../components/footer.php" ?>
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