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


  // for portfolio section slider .....................................................................
  const slider = document.getElementById("slider");
  const total = slider.children.length;
  let currentIndex = 0;

  const numberContainer = document.getElementById("numberContainer");

  // Create numbered buttons
  for (let i = 0; i < total; i++) {
    const btn = document.createElement("span");
    btn.classList.add("num-btn");
    btn.textContent = i + 1;
    if (i === 0) btn.classList.add("active");
    btn.setAttribute("data-index", i);
    btn.addEventListener("click", () => {
      currentIndex = i;
      updateSlider();
    });
    numberContainer.appendChild(btn);
  }

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    document.querySelectorAll(".num-btn").forEach(btn => btn.classList.remove("active"));
    document.querySelectorAll(".num-btn")[currentIndex].classList.add("active");
  }

  // Auto scroll
  setInterval(() => {
    currentIndex = (currentIndex + 1) % total;
    updateSlider();
  }, 2000);

  // Swipe support for mobile only ...........................................................................................
  const sliderBox = document.getElementById("sliderBox");
  let startX = 0;

  sliderBox.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  sliderBox.addEventListener("touchend", (e) => {
    const endX = e.changedTouches[0].clientX;
    const diff = startX - endX;

    if (diff > 50) {
      currentIndex = (currentIndex + 1) % total;
    } else if (diff < -50) {
      currentIndex = (currentIndex - 1 + total) % total;
    }

    updateSlider();
  });

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

// to display popup box ................................................................................................
setTimeout(function()
{
document.querySelector("#btn1").style.display = "block";
document.querySelector("#btn2").style.display = "block";
document.querySelector("main").style.opacity = "0.3";
document.querySelector("main").style.pointerEvents ="none";

},5000)

// to remove cancel popup box ................................................................................................
function RemoveIpop()
{
  document.querySelector("#btn1").style.display = "none";
  document.querySelector("#btn2").style.display = "none";
  document.querySelector("main").style.opacity = "1";
  document.querySelector("main").style.pointerEvents ="fill";
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
  Clientfeedback("../assets/Images/avinash.jpg", "CEO/GetNotes" ,"⭐⭐⭐⭐" ,  "The Services provide  by Campusxchange is meaning ful");;
}
function Client3()
{
Clientfeedback("../assets/Images/rajneesh.jpg", "Own/Memory Pzzle Game" ,"⭐⭐⭐" ,  "Post Development support is very Good");
}
function Client4()
{
 Clientfeedback("../assets/Images/banty.jpg", "Founder/Admission Coach" ,"⭐⭐⭐⭐" ,  "The Website desighn id user friendly and it is browser compatability ");
}





