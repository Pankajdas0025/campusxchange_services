<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
/* Footer */
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
/* header */
body
{font-family: var(--font-main);}
#include-footer {display: flex;flex-direction:row;min-height: 50vh;margin:0;background-color:#004080;width: 100%;height: auto;}
.footer-div{ width: 25%; margin: 0%; text-align: left;}
.footer-div h2{ padding: 10px 20px; color: white;}
.footer-div a{text-decoration: none;display: block;padding: 5px 20px; color:white; font-weight: 600;}
.footer-div a:hover{  text-decoration: underline;  transform: translateX(1px);}
/* Animated cursor for all pages ---------------------------------*/
.cursor{ z-index: 999; background-color:transparent; backdrop-filter: blur(20px); width: 20px; height: 20px; border-radius: 50%; pointer-events: none;outline: 2px double white;border:1px double white;box-shadow: var(--shadow);position: absolute;transition:0.1s;}
/* Animated cursor end  ---------------------------------*/
#whatsappbtn
{z-index: 100;background-color:var(--secondary-color);position:fixed;top: 85%;left:4%;height:60px;width:60px;font-size: 1.5rem;font-weight: bolder;box-shadow: var(--shadow);display:block;border-radius: 50%;border:var(--border);

}#movebtn
{ z-index: 100;
  position:fixed;
  top: 85%;
  left:90%;
  height:60px;
  width:60px;
  font-size: 1.5rem;
  display: none;
  font-weight: bolder;
  box-shadow: var(--shadow);
  border:var(--border);
  background-color: var(--primary-color);
  border-radius: 50%;
  padding:3px;

} #All-reserved
{
  width: 100%;
  background-color: #222;       /* dark and consistent footer tone */
  color: white;
  text-align: center;
  padding: 15px 10px;
  font-size: 0.9rem;
  font-weight: 500;
  letter-spacing: 0.5px;
  border-top: 1px solid rgba(255, 255, 255, 0.2);
  display: flex;
  flex-wrap: wrap;
  line-height: 1.5;
  text-align: left;
}
  /* Full screen loader background */
  #loading-screen {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #ffffff;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    transition: opacity 0.5s ease, visibility 0.5s ease;
    flex-direction: column;
  }
  /* Hide smoothly */
  #loading-screen.hidden { opacity: 0; visibility: hidden; }
  /* Loader wrapper */
  .loader {  width: 120px;height: 120px;  position: relative;}
  /* Pulse rings */
  .loader::before,
  .loader::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    border: 4px solid transparent;
    border-top-color:var(--primary-color);
    border-bottom-color: var(--secondary-color);
    animation: pulse 1.5s ease-in-out infinite;
  }
  .loader::after {
    border-top-color: #e0e719ff;
    border-bottom-color: #1e90ff;
    animation-delay: 0.75s;
  }
  /* Logo in center */
  .loader img { width: 60px; height: 60px; border-radius: 50%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); animation: logoScale 1.5s ease-in-out infinite;}
  /* Animations */
  @keyframes pulse {
    0%, 100% {
      transform: translate(-50%, -50%) scale(0.8);
      opacity: 0.7;
    }
    50% {
      transform: translate(-50%, -50%) scale(1.2);
      opacity: 0.3;
    }
  }

  @keyframes logoScale {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.1); }
  }

  /* Optional loader text */
  .loader-text {
    margin-top: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 1.2rem;
    color: #004080;
    animation: fadeText 1.5s ease-in-out infinite;
  }
  @keyframes fadeText {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
  }
  @media(max-width:600px)
{
/* Footer */
#include-footer {
  display:block;
  position: absolute;
  height:auto;
  margin:0rem;
  left: 0;
  padding: 1rem;
}
.footer-div
{
  width: 100%;
  margin: 0;
  text-align: left;
}.footer-div h2
{
  padding: 10px 20px;
}
.footer-div a
{
  text-decoration: none;
  display: block;
  padding: 10px 20px;

}.footer-div p
{
  color: white;
}
#whatsappbtn
{
  top: 85%;
  left:10%;
  height:55px;
  width:55px;
  z-index:999;
}
#movebtn
{
  top:85%;
  left:77%;
  height:55px;
  width:55px;
}#All-reserved
{
    font-size: 0.8rem;
    padding: 12px 8px;
    flex-direction: row ;
    text-align: center;
    position: absolute;
    margin-top:270vh;
    min-width:100%;
    display: block;
}
}
</style>
</head>
<body>
    <!-- Splash Screen Loader -->
  <div id="loading-screen">
  <div class="loader">
<img src="https://campusxchange.wuaze.com/assets/Images/taransparent-profile-logo-campusxchange.png" alt="LOGO">
  </div>
  <div class="loader-text">Loading...</div>
</div>
<!-- Splash Screen Loader -->
<!--End of Tawk.to Script-->
  <!-- animated cursor ------------------->
 <div class="cursor"></div>
<!-- animated cursor end ---------------->
<!-- WhatsApp Button -->
<button id="whatsappbtn" aria-label="WhatsApp Button" style="font-size:28px; color:#00fd5d;  border:none; cursor:pointer;">
<i class="fa-brands fa-whatsapp"></i>
</button>
<!-- Scroll to Top Button -->
<button id="movebtn" onclick="movetopFun()" aria-label="Scroll to Top" style="font-size:28px; color:#ffffff; border:none; cursor:pointer;">
<i class="fa-solid fa-arrow-up"></i>
</button>
    <footer class="footer" id="include-footer">
  <div class="footer-div">
  <h2>Grow Smarter with CampusXchange</h2>
<a href="#" style="text-decoration: none; cursor:alias; color: rgb(155, 164, 178);"> CampusXchange, we're building a space where you learn, create, and grow — with expert notes, hands-on projects, internships, and mentorship. Whether you're a student, freelancer, or startup, this is where your journey to smarter, real-world success begins.</a>

<a href="tel:+91915576625" style="font-size:14px;"><i class="fa-solid fa-phone"></i> +919155726625</a>
<a href="mailto:campusxchangeservices@gmail.com" style="font-size:12.5px;"><i class="fa-solid fa-envelope"></i> campusxchangeservices@gmail.com </a>

</div>

<div class="footer-div">
  <h2><i class="fa-solid fa-link"></i> Quick Links</h2>
  <a href="https://campusxchange.wuaze.com/home" title="CampusXchange Home">
    <i class="fa-solid fa-house"></i> Home
  </a>
  <a href="https://campusxchange.wuaze.com/services/web-development" title="Professional Web Development Services by CampusXchange">
    <i class="fa-solid fa-code"></i> Website Development
  </a>
  <a href="https://campusxchange.wuaze.com/services/seo" title="SEO Optimization & Digital Marketing Services by CampusXchange">
    <i class="fa-solid fa-chart-line"></i> SEO Services
  </a>
  <a href="https://campusxchange.wuaze.com/handouts/notes" title="Download Free Technical Notes from CampusXchange">
    <i class="fa-solid fa-book-open"></i> Notes
  </a>
  <a href="https://campusxchange.wuaze.com/handouts/blog" title="Read Latest Tech Blogs on CampusXchange">
    <i class="fa-solid fa-pen-nib"></i> Blogs
  </a>
  <a href="https://campusxchange.wuaze.com/handouts/assignment" title="Programming Assignments & Practice Questions">
    <i class="fa-solid fa-laptop-code"></i> Programming Assignment
  </a>
  <a href="https://campusxchange.wuaze.com/internship/apply" title="Apply for Internship Opportunities at CampusXchange">
    <i class="fa-solid fa-user-graduate"></i> Apply for Internship
  </a>
  <a href="https://campusxchange.wuaze.com/internship/verification" title="Verify Internship or Certificate at CampusXchange">
       <i class="fa-solid fa-circle-check" aria-hidden="true"></i> Verification
  </a>
  <a href="https://campusxchange.wuaze.com/about" title="Learn More About CampusXchange">
    <i class="fa-solid fa-circle-info"></i> About Us
  </a>
  <a href="https://campusxchange.wuaze.com/lettalk" title="Contact CampusXchange Team">
    <i class="fa-solid fa-comments"></i> Let's Talk
  </a>
</div>
 <div class="footer-div">
      <h2><i class="fa-solid fa-handshake"></i> Social Links</h2>
      <a href="https://www.linkedin.com/company/campusxchange" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
      <a href="https://www.instagram.com/campusxchange_services/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
      <a href="https://facebook.com/campusxchangeservices" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
      <h2><i class="fa-solid fa-file-shield"></i> Policy</h2>
      <a href="/privacy-policyandterms"><i class="fa-solid fa-circle-info"></i> Privacy Policy</a>
      <a href="/privacy-policyandterms"><i class="fa-solid fa-comments"></i> Terms & Conditions</a>
      <a href="/sitemap"><i class="fa-solid fa-route"></i> Sitemap</a>
    </div>
  <div class="footer-div"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225514.60613766374!2d87.69908297984767!3d26.13640743705686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e56f6429ec6027%3A0x9846e4b1c8b20348!2sCampusXchange%20Services!5e0!3m2!1sen!2sin!4v1760370781433!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google-business-map"></iframe></div>
 </footer>
 <div id="All-reserved"> All rights reserved By: campusxchange &copy; 2025</div>
 <script>

  // animated cursor --------------------------------------------------------
var cursor=document.querySelector(".cursor");

document.addEventListener("mousemove",(e)=>
{
  let x=e.pageX;
  let y=e.pageY;
  cursor.style.top = y+"px";
  cursor.style.left = x+"px";
});

// animated cursor end ----------------------------------------------------
// Wait for the DOM to load before running script
document.addEventListener("DOMContentLoaded", function() {

  // Get the button if it exists
  const mybutton = document.getElementById("movebtn");
  if (!mybutton) return; // Exit if button not present

  // Show button on scroll
  window.addEventListener("scroll", function() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  });

  // Scroll to top on click
  mybutton.addEventListener("click", function() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });

});


     // Keep loader for 3 seconds, then hide
    window.addEventListener("load", function() {
      setTimeout(function() {
        document.getElementById("loading-screen").classList.add("hidden");
      },1000); // 3000ms = 3 seconds
    });

 </script>


</body>
</html>