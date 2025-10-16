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
  <title>Let's Talk - CampusXchange | Contact & Collaboration</title>
  <meta name="title" content="Let's Talk - CampusXchange | Contact & Collaboration">
  <meta name="description" content="Have questions or ideas? Connect with CampusXchange for support, web development, SEO services, mentorship, and internship opportunities.">
  <meta name="keywords" content="contact CampusXchange, let's talk, reach CampusXchange, collaboration, mentorship support, web development services, SEO services, CampusXchange email, CampusXchange location">
  <meta name="author" content="CampusXchange"/>
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://campusxchange.wuaze.com/lettalk" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://campusxchange.wuaze.com/lettalk">
  <meta property="og:title" content="Let's Talk - CampusXchange | Contact & Collaboration">
  <meta property="og:description" content="Reach out to CampusXchange for collaboration, support, or services in web development, SEO, mentorship, and internships.">
  <meta property="og:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-all.jepg">
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://campusxchange.wuaze.com/lettalk">
  <meta property="twitter:title" content="Let's Talk - CampusXchange | Contact & Collaboration">
  <meta property="twitter:description" content="Connect with CampusXchange for questions, support, mentorship, and web or SEO services. Fast response guaranteed.">
  <meta property="twitter:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-all.jepg">
  <link rel="stylesheet" href="styles/animation.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
  <!-- cdns-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Favicon  -------------------------------------------------------------------->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
<!-- JSON-LD Schema for ContactPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "url": "https://campusxchange.wuaze.com/letttalk",
    "name": "Let's Talk - CampusXchange",
    "description": "Reach out to CampusXchange for support, collaboration, web development, SEO services, mentorship, and internship programs.",
    "publisher": {
      "@type": "Organization",
      "name": "CampusXchange",
      "url": "https://campusxchange.wuaze.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://campusxchange.wuaze.com/assets/campusxchange-logo-transparent.png"
      }
    }
  }
  </script>
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
    color:var(--primary-color);
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
    color:var(--primary-color);
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
    color:var(--secondary-color);
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
  /* <!-- contact us newsletter section -----------------------------------------> */
    .newsletter-unique {
    display: flex;
    flex-wrap: wrap;
    gap: 2.5rem;
    justify-content: center;
    align-items: stretch;
    width: 100%;
    margin: 0 auto 2rem auto;
    background: linear-gradient(120deg, #e0e7ff 60%, #f9fafb 100%);
    box-shadow: 0 4px 24px rgba(99,102,241,0.08);
    padding: 2.5rem 1rem;
  }

  .newsletter-card {
    background: #fff;
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
    border-top: 6px solid var(--primary-color);
  }.newsletter-card #f-Error
  {
    background-color:lightgray;
    color: red;
    font-weight: 600;
    margin: 2% 0;

  }
  .newsletter-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 8px 32px rgba(99,102,241,0.13);
    border-top: 6px solid var(--secondary-color);
  }
  .newsletter-card .card-icon {
    font-size: 2.5rem;
    color:var(--primary-color);
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
    color: #a19b9bff;
    margin: 0.5rem 0 1rem 0;
    text-align: center;
    font-size: 1.3rem;
    font-weight: 600;
  }
  .newsletter-card input, .newsletter-card textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid var(--primary-color);
    font-size: 1rem;
    margin-bottom: 1rem;
    border-radius: 6px;
    background: #f9fafb;
    transition: border 0.2s;
  }
  .newsletter-card input:focus, .newsletter-card textarea:focus {
    border: 1.5px solid var(--secondary-color);
    outline: none;
  }
  .newsletter-card button {
    background: var(--primary-color);
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
    margin-left: 40px;
  }
  .newsletter-card button:hover {
    background:var(--secondary-color);
    color: #fff;
  }

  #newsletterForm
  {
    background-color: var(--primary-color);
    padding: 10% ;
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

  }
    .contact-map, .contact-info {
      min-width: 0;
      width: 100%;
    }
    .contact-map {
      height: 220px;
    }

  .contact-form-box input,textarea,button {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid var(--primary-color);
    font-size: 1rem;
    margin:1% 0%;
  }
  #newsletterForm
  {
    padding: 10% 0;
    height: 300px;
  }
  #newsletterForm span {
    font-size:0.67rem;
  } .newsletter-card button
  {
     margin-left: 0px;
  }
  }  @media (max-width: 900px) {
    .newsletter-unique {
      flex-direction: column;
      gap: 1.2rem;
      padding: 1.2rem 0rem;
    }
    .newsletter-card {
      min-width: 0;
      width: 100%;
      padding: 1.2rem 0.7rem;
    }
  }

</style>
<body>
   <!--About page Header and navbar ----------------------------------------------------------------------------------------->
   <header style="border-radius: 0;">
      <div class="Logo"><img src="assets/Images/campusxchange-logo-transparent.png" title="CampusXchange Logo"></div>
   </header>
   <?php  include "components/header.php" ?>

  <!--about page Header and navbar end ----------------------------------------------------------------------------------------->
<br>
<main>
  <section class="contact-main">
  <div class="contact-info">
    <h2>Contact Us</h2>
    <ul>
      <!-- <li><i class="fa-solid fa-location-dot"></i> <strong>Head Office:</strong> Kishanganj, Bihar (855115), India</li>
      <li><i class="fa-solid fa-building"></i> <strong>Branch:</strong> Patna, Bihar (800001), India</li> -->
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
  <div class="animationtype3 newsletter-card">
    <span class="card-icon"><i class="fa-solid fa-paper-plane"></i></span>
    <form class="contact-form" id="contactForm" autocomplete="off">
      <h3>Send Us a Message</h3>
      <div id="f-Error"></div>
      <input type="text" id="contactName" name="contactName" placeholder="Your Name" required>
      <input type="email" id="contactEmail" name="contactEmail" placeholder="Your Email" required>
      <input type="tel" id="contactPhone" name="contactPhone" placeholder="Your Mobile " maxlength="10" required>
      <textarea id="contactMsg" name="contactMsg" placeholder="Your Message" rows="4" minlength="20" required></textarea>
      <button type="submit">Send Message</button>

    </form>
  </div>
<!-- subscribe us newsletter section ----------------------------------------->
  <div class="animationtype3 newsletter-card">
    <span class="card-icon"><i class="fa-solid fa-bell" method="POST" ></i></span>
    <form class="contact-form" id="newsletterForm" method="POST" action="">
      <h3>Ready For New Updates</h3>
      <input type="email" id="newsletterEmail" name="contact_email" placeholder="Your Email" required>
      <button type="submit">Subscribe</button>
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
   echo"<script>alert('Thank You for subscribe ');  window.location.href='http://localhost/Campusxchange/lettalk';  </script>";
  }
}
 ?>
  </div>
</section>
<?php
include("feedback.php");
?>
</main>
<br>
<!-- footer section  --------------------------------------------------------------------------------->
<?php include "components/footer.php" ?>
<!-- fotter section end  here --------------------------------------------------------------------------------->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");
  const form_sms = document.getElementById("f-Error"); //
  const form_name = document.getElementById("contactName");
  const form_email = document.getElementById("contactEmail");
  const form_phone = document.getElementById("contactPhone");
  const form_msg = document.getElementById("contactMsg");

  // ✅ Name Validation
  form_name.addEventListener("change", () => {
    const name = form_name.value.trim();
    if (!/^[a-zA-Z\s]{4,}$/.test(name)) {
      form_sms.textContent = "Please enter a valid name (letters only, min 4 characters).";
      form_name.style.color = "red";

       setTimeout(() => {
        form_sms.innerHTML = "";
          form_name.value = "";
          form_name.style.color = "black";
        }, 3000);
    } else {
      form_sms.textContent = "";
      form_name.style.color = "black";
    }
  });

  // ✅ Email Validation
  form_email.addEventListener("change", () => {
    const email = form_email.value.trim();
    if (!/^\S+@\S+\.\S+$/.test(email)) {
      form_sms.textContent = "Please enter a valid email address.";
      form_email.style.color = "red";
       setTimeout(() => {
        form_sms.innerHTML = "";
          form_email.value = "";
          form_email.style.color = "black";
        }, 3000);
    } else {
      form_sms.textContent = "";
      form_email.style.color = "black";
    }
  });

  // ✅ Phone Validation (Optional)
  form_phone.addEventListener("change", () => {
    const mobile = form_phone.value.trim();
    if (mobile !== "" && !/^\d{10}$/.test(mobile)) {
      form_sms.textContent = "Mobile number must be exactly 10 digits.";
      form_phone.style.color = "red";

       setTimeout(() => {
        form_sms.innerHTML = "";
          form_phone.value = "";
          form_phone.style.color = "black";
        }, 3000);
    } else {
      form_sms.textContent = "";
      form_phone.style.color = "black";
    }
  });

  // ✅ Form Submission (Send to WhatsApp)
  form.addEventListener("submit", (event) => {
    event.preventDefault();

    const name = form_name.value.trim();
    const email = form_email.value.trim();
    const number = form_phone.value.trim();
    const sms = form_msg.value.trim();

    // Final validation before sending
    if (name === "" || email === "" || sms === "") {
      form_sms.textContent = "Please fill all required fields before submitting.";
      return;
    }

    const whatsappNumber = "919155726625"; // Your WhatsApp number
    const message = `Hello, my name is ${name}%0aEmail: ${email}%0aContact: ${number}%0aMessage: ${sms}%0aPlease reply to me for my query.`;
    const url = `https://wa.me/${whatsappNumber}?text=${message}`;

    window.open(url, "_blank");
  });
});
</script>


<script src="script.js"></script>

</body>
</html>
