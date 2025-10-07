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
{
      font-family: var(--font-main);
}
#include-footer {

  display: flex;
  flex-direction:row;
  min-height: 50vh;
  margin:125px 0;
  background-color:#004080;
  width: 100%;
  height: auto;
}
.footer-div
{
  width: 25%;
  margin: 0%;
  text-align: left;

}.footer-div h2
{

  padding: 10px 20px;
  color: white;

}


.footer-div a
{
  text-decoration: none;
  display: block;
  padding: 5px 20px;
  color:white;
  font-weight: 600;
}.footer-div a:hover
{
  text-decoration: underline;
  transform: translateX(1px);
}

/* Animated cursor for all pages ---------------------------------*/
.cursor
{
  z-index: 999;
  background-color:transparent;
  backdrop-filter: blur(20px);
  width: 20px;
  height: 20px;
  border-radius: 50%;
  pointer-events: none;
  outline: 2px double white;
  border:1px double white;
  box-shadow: var(--shadow);
  position: absolute;
  transition:0.1s;
}
/* Animated cursor end  ---------------------------------*/

#whatsappbtn
{
  z-index: 100;
  background-color:var(--secondary-color);
  position:fixed;
  top: 85%;
  left:4%;
  height:60px;
  width:60px;
  font-size: 1.5rem;
  font-weight: bolder;
  box-shadow: var(--shadow);
  display:block;
  border-radius: 50%;
  border:var(--border);

}#movebtn
{
  z-index: 100;
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
}

}

</style>

</head>
<body>
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
<a href="#"><i class="fa-solid fa-phone"></i>+91 9155726625</a>
<a href="#"><i class="fa-solid fa-evalope"></i>support@campusxchange.com</a>
</div>

<div class="footer-div">
  <h2><i class="fa-solid fa-link"></i> Quick Links</h2>

  <a href="http://localhost/Campusxchange/home" title="CampusXchange Home">
    <i class="fa-solid fa-house"></i> Home
  </a>

  <a href="http://localhost/Campusxchange/services/web-development" title="Professional Web Development Services by CampusXchange">
    <i class="fa-solid fa-code"></i> Website Development
  </a>

  <a href="http://localhost/Campusxchange/services/seo" title="SEO Optimization & Digital Marketing Services by CampusXchange">
    <i class="fa-solid fa-chart-line"></i> SEO Services
  </a>

  <a href="http://localhost/Campusxchange/handouts/notes" title="Download Free Technical Notes from CampusXchange">
    <i class="fa-solid fa-book-open"></i> Notes
  </a>

  <a href="http://localhost/Campusxchange/handouts/blog" title="Read Latest Tech Blogs on CampusXchange">
    <i class="fa-solid fa-pen-nib"></i> Blogs
  </a>

  <a href="http://localhost/Campusxchange/handouts/assignment" title="Programming Assignments & Practice Questions">
    <i class="fa-solid fa-laptop-code"></i> Programming Assignment
  </a>

  <a href="http://localhost/Campusxchange/internship/apply" title="Apply for Internship Opportunities at CampusXchange">
    <i class="fa-solid fa-user-graduate"></i> Apply for Internship
  </a>

  <a href="http://localhost/Campusxchange/internship/verification" title="Verify Internship or Certificate at CampusXchange">
       <i class="fa-solid fa-circle-check" aria-hidden="true"></i> Verification
  </a>

  <a href="http://localhost/Campusxchange/about" title="Learn More About CampusXchange">
    <i class="fa-solid fa-circle-info"></i> About Us
  </a>

  <a href="http://localhost/Campusxchange/lettalk" title="Contact CampusXchange Team">
    <i class="fa-solid fa-comments"></i> Let's Talk
  </a>
</div>

<div class="footer-div">
  <h2><i class="fa-solid fa-handshake"></i> Social Links</h2>
  <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-linkedin"></i> LinkedIn
  </a>
  <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-instagram"></i> Instagram
  </a>
  <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-twitter"></i> Twitter
  </a>
  <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-facebook"></i> Facebook
  </a>
  <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-youtube"></i> YouTube
  </a>
   <h2><i class="fa-solid fa-file-shield"></i> Policy</h2>

<div class="policy-links">
  <a href="http://localhost/Campusxchange/privacy-policyandterms" title="Learn More About CampusXchange Privacy">
    <i class="fa-solid fa-circle-info"></i> Privacy Policy
  </a>
  <a href="http://localhost/Campusxchange/terms-and-condition" title="Learn More About CampusXchange Terms">
    <i class="fa-solid fa-comments"></i> Terms & Conditions
  </a>

  <a href="http://localhost/Campusxchange/sitemap" title="Learn More About CampusXchange Terms">
    <i class="fa-solid fa-route"></i>sitemap
  </a>
</div>
<!-- <p>All rights reserved By: Pankaj&copy; 2025</p> -->
    </div>
      <div class="footer-div"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28665.22969122228!2d87.92639821019456!3d26.093900587226088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e516befd097303%3A0xb171e5facfa2a2d8!2sKishanganj%2C%20Bihar%20855107!5e0!3m2!1sen!2sin!4v1758648469245!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

 </footer>

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

 </script>
</body>
</html>