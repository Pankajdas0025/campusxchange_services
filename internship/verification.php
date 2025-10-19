
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Primary Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verification -  CampusXchange Secure Access</title>
  <meta name="title" content="Verification -  CampusXchange Secure Access">
  <meta name="description" content="Secure your CampusXchange experience with account verification. Verify your internship certificate.">
  <meta name="keywords" content="Certificate verification, CampusXchange verification, student account security, verify internship certificate, campusxchange certificate-verification">
  <meta name="author" content="CampusXchange"/>
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://campusxchange.wuaze.com/internship/verification">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://campusxchange.wuaze.com/internship/verification">
  <meta property="og:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="og:description" content="Join CampusXchange and explore internships, live projects, and opportunities to build your career. Apply online today!">
  <meta property="og:image" content="https://campusxchange.wuaze.com/assets/images/og-images/og-internship.jpeg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://campusxchange.wuaze.com/internship/verification">
  <meta property="twitter:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="twitter:description" content="CampusXchange helps students connect with internships, live projects, and career opportunities. 100% online and easy to apply!">
  <meta property="twitter:image" content="https://campusxchange.wuaze.com/assets/images/og-images/og-internship.jpeg">

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
  :root {

  --primary-color: #004080;
  --secondary-color: #f43f5e;
  --shadow: 0 8px 30px rgba(2,6,23,0.08);
  --radius: 10px;

}

  .verify-section {
  background: linear-gradient(to right, var(--primary-color), var(--secondary-color) );
    padding: 2.5rem 1rem 2rem 1rem;
    max-width: 600px;
      height: 400px;
    margin: 2rem auto 2rem auto;
    box-shadow: 0 2px 16px rgba(99,102,241,0.08);
  }
  .verify-section h1 {
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
    background: var(--primary-color);
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
    background: var(--secondary-color);
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
<?php include "../components/header.php" ?>
 <!-- header section end here-------------------------------------------------------->
<section class="verify-section">
  <h1> <i class="fa-solid fa-file"></i> Internship Certificate Verification </h1>
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
<?php include "../components/footer.php" ?>
<script src="../script.js"></script>
</body>
</html>
