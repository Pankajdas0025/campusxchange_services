// CDN animation
  AOS.init({
    duration: 1000, // Animation duration (ms)
    offset: 120,    // Scroll offset
    once: true,     // Animate only once
  });

function myFunction()
{
  var x = document.getElementById("myTopnav");
  // var y = document.getElementsByClassName("icon").InnerText="&times";
  if (x.className === "topnav") {
    x.className += " responsive";

  } else {
    x.className = "topnav";
  }
}
  function copyLink(relativePath) {
    // window.location.origin + "/MYPHP/CRUD/" +
    const baseURL = relativePath;
    navigator.clipboard.writeText(baseURL).then(() => {
      alert("Copied blog link to clipboard!");
    }).catch(() => {
      alert("Failed to copy!");
    });
  }
// incresase count of numbers
function changCount() {
  let count1 = 0;
  let count2 = 0;
  let count3 = 0;

  let maxCounts1 = 15;
  let maxCounts2 = 40;
  let maxCounts3 = 30;

  let interval = setInterval(() => {
    if (count1 < maxCounts1) {
      count1++;
      document.getElementById("Count1").textContent = count1 + "+";
    }

    if (count2 < maxCounts2) {
      count2++;
      document.getElementById("Count2").textContent = count2 + "+";
    }

    if (count3 < maxCounts3) {
      count3++;
      document.getElementById("Count3").textContent = count3 + "+";
    }

    // Stop interval if all are done
    if (count1 >= maxCounts1 && count2 >= maxCounts2 && count3 >= maxCounts3) {
      clearInterval(interval);
    }
  },100); // run every 100ms
}
/*Home page  FAQ script start here -------------------------------*/
 document.addEventListener("DOMContentLoaded", () => {
  const faqs = document.querySelectorAll(".faq");

  faqs.forEach(faq => {
    faq.querySelector(".faq-question").addEventListener("click", () => {
      faq.classList.toggle("active");

      const answer = faq.querySelector(".faq-answer");
      const isVisible = faq.classList.contains("active");
      answer.style.display = isVisible ? "block" : "none";

      // Close other FAQs
      faqs.forEach(otherFaq => {
        if (otherFaq !== faq) {
          otherFaq.classList.remove("active");
          otherFaq.querySelector(".faq-answer").style.display = "none";
        }
      });
    });
  });
});
/* Home Page FAQ script end here -------------------------------*/

// webpage client feedback----------------------------------------------
function Clientfeedback(imgsrc, clientpos, rating , sms)
{
  const a = document.querySelector("#clientimg");
  const b = document.querySelector("#clientpossition");
  const c = document.querySelector("#clientrating");
  const d = document.querySelector("#clientfeedback");
  a.src =imgsrc;
  b.innerText=clientpos;
  c.innerText=rating;
  d.innerText=sms;
}
function Client1()
{
Clientfeedback("../assets/images/abhiraj.jpg", "Founder(BlogScript)" ,"⭐⭐⭐⭐" ,  "The team's professionalism and quick response time were outstanding. They were always available to answer our questions, and the project was completed ahead of schedule. The results have been fantastic, and we're already seeing a significant return on our investment");

}
function Client2()
{
  Clientfeedback("../assets/Images/avinash.jpg", "CEO/GetNotes" ,"⭐⭐⭐⭐" ,  "The Services provide  by Campusxchange is meaningful and it gives a good outcome");;
}
function Client3()
{
Clientfeedback("../assets/Images/rajneesh.jpg", "Own/Memory Pzzle Game" ,"⭐⭐⭐" ,  "The website design is highly user-friendly, offering smooth navigation and excellent browser compatibility. It adapts well across different devices, ensuring a consistent and engaging user experience. The overall layout is clean, visually appealing, and thoughtfully structured to meet user needs effectively.");
}
function Client4()
{
 Clientfeedback("../assets/Images/banty.jpg", "Founder/Admission Coach" ,"⭐⭐⭐⭐" ,  "The website has an impressive and user-friendly design that makes navigation simple and intuitive for all visitors. It loads smoothly and maintains excellent compatibility across different browsers and devices, ensuring a consistent experience whether viewed on a desktop, tablet, or mobile. The layout is well-organized, visually appealing, and effectively balances both aesthetics and functionality. Overall, the design reflects thoughtful planning and attention to user experience.");
}







// Hide Inspect Element

document.onkeydown = function(e)
{
  // Disable F12
if (e.keyCode == 123) {return false;}
  // Disable Ctrl+Shift+I
if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {return false;}
  // Disable Ctrl+Shift+C
if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {return false;}
  // Disable Ctrl+Shift+J
if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {return false;}
  // Disable Ctrl+U
if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {return false;}
  // Disable Ctrl+S
if (e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)) {e.preventDefault();return false; }
};
// Disable Right-Click
document.addEventListener('contextmenu', function(e) {e.preventDefault();});
// Disable Double-Click
document.addEventListener('dblclick', function(e) {e.preventDefault();});

