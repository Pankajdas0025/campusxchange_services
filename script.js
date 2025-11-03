
// For Mobile menu-------------------
function myFunction()
{
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") { x.className += " responsive";}
  else {x.className = "topnav";}
}

// For handouts/notes page share note-------------------
function copyLink(relativePath)
{
  const baseURL = relativePath;
  navigator.clipboard.writeText(baseURL).then(() => {alert("Copied Note link to clipboard!");}).catch(() => {alert("Failed to copy!");});
}

// incresase count of numbers in slider for home page
function changCount() {
  let count1 = 0; let count2 = 0; let count3 = 0;
  let maxCounts1 = 15;let maxCounts2 = 40;let maxCounts3 = 30;
  let interval = setInterval(() =>
    {
    if (count1 < maxCounts1) {count1++;document.getElementById("Count1").textContent = count1 + "+";}
    if (count2 < maxCounts2) {count2++;document.getElementById("Count2").textContent = count2 + "+";}
    if (count3 < maxCounts3) {count3++;document.getElementById("Count3").textContent = count3 + "+";}
    // Stop interval if all are done
    if (count1 >= maxCounts1 && count2 >= maxCounts2 && count3 >= maxCounts3) {clearInterval(interval);}
  },100); // run every 100ms
}

//Home page  FAQ script start here ------------------------------
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
// Services/web-development page client feedback----------------------------------------------
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

function Client1(){Clientfeedback("../assets/images/abhiraj.jpg", "Founder(BlogScript)" ,"⭐⭐⭐⭐" ,  "The team's professionalism and quick response time were outstanding. They were always available to answer our questions, and the project was completed ahead of schedule. The results have been fantastic, and we're already seeing a significant return on our investment");}
function Client2(){Clientfeedback("../assets/Images/avinash.jpg", "CEO/GetNotes" ,"⭐⭐⭐⭐" ,  "The Services provide  by Campusxchange is meaningful and it gives a good outcome");;}
function Client3(){Clientfeedback("../assets/Images/rajneesh.jpg", "Own/Memory Pzzle Game" ,"⭐⭐⭐" ,  "The website design is highly user-friendly,smooth navigation and excellent browser compatibility. It adapts well across different devices, ensuring a consistent and engaging user experience.");}
function Client4(){Clientfeedback("../assets/Images/banty.jpg", "Founder/Admission Coach" ,"⭐⭐⭐⭐" ,"The website has an impressive and user-friendly design that makes navigation simple and intuitive for all visitors.");}





