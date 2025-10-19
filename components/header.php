<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
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
/* header */

/* header for all pages  */
header
{

  position: sticky;
  top: 0;
  z-index: 9999; /* try higher */
  background-color: var(--primary-color);


}
.Logo{height: 100px;width:25vw;background-color:transparent;padding: 0;font-size:20px;font-style: normal;color: white;}
.Logo img{ height:100px; width:100%;}
body
{
      font-family: var(--font-main);
}
.topnav {
  overflow: hidden;
  background-color:var(--primary-color);
  height:100px;
  margin: 0 ;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  outline: none;
  border: none;
}

.active {
  background-color:transparent;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  padding-top:4px;
  padding-top:0px;
}

.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 18px 16px;
  background-color: inherit;
  font-family: inherit;
  border: none;
  outline: none;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 14px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color:var(--hoverbg);
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/* Progress bar styling */
#scroll-progress {
  position: fixed;
  top: 0;
  left: 0;
  height: 6px;
  margin: 0 10px;
  width: 0%;
  background: linear-gradient(90deg, var(--primary-color),var(--secondary-color));
  box-shadow: var(--shadow);
  transition: width 0.2s ease;
  z-index: 9999;

}

/* navbar code end  here ------------------------------------------------------------------------------------------------------------------- */

@media screen and (max-width:700px)
{

  /* For all Mobile  Navbar ----------------------------------------------------------------------------------------------------------------------------*/
.Logo
{
  height: 80px;
  width: 90%;
  margin: auto 5%;
  background-color:transparent;
  padding: 0;
}.Logo img
{
  height:80px;
  width:100%;
}
  .topnav {

  height:auto;
}


  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }  .topnav.responsive {
    position: relative;
    height:auto;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }/* Progress bar styling */
#scroll-progress {

  height: 10px;
  margin: 0;

}

}

/* navbar code end  here ------------------------------------------------------------------------------------------------------------------- */

 </style>
</head>
<body>

   <!--Home page Header and navbar ----------------------------------------------------------------------------------------->

     <header><div class="Logo"><img src="https://campusxchange.wuaze.com/assets/Images/campusxchange-logo-transparent.png" alt="CampusXchange Logo"></div></header>
<div class="topnav" id="myTopnav">
  <a href="https://campusxchange.wuaze.com/home" class="active" style="background-color: #555;">  <i class="fa-solid fa-home"></i>Home</a>
   <div class="dropdown">
    <button class="dropbtn">  <i class="fa-solid fa-gears"></i>Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://campusxchange.wuaze.com/services/web-development" title="Web Development From CampusXchange">Website Development</a>
      <a href="https://campusxchange.wuaze.com/services/seo">SEO</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn"><i class="fa-solid fa-book-open"></i>Handouts
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://campusxchange.wuaze.com/handouts/notes" title="Technical Notes">Notes</a>
      <a href="https://campusxchange.wuaze.com/handouts/blog" title="Scripted Blogs">Blogs</a>
      <a href="https://campusxchange.wuaze.com/handouts/assignment" title="Programming Lab Assignment">Programming Assignment</a>
    </div>
  </div>
 <div class="dropdown">
    <button class="dropbtn">Mentorship & Internship<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="https://campusxchange.wuaze.com/internship/apply">Apply </a>
      <a href="https://campusxchange.wuaze.com/internship/verification">Verification</a>
      <a href="https://campusxchange.wuaze.com/internship-program">Internship-program</a>
    </div>
  </div>
      <a href="https://campusxchange.wuaze.com/about"><i class="fa-solid fa-bullseye"></i>About</a>
          <a href="https://campusxchange.wuaze.com/lettalk"><i class="fa-solid fa-phone"></i>Let's Talk</a>
    <!--// mobile Togglebar ----------------------------------------------------------------------------------------->
 <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()"> &#9776;</a>
</div>
<br>
<div id="scroll-progress"></div>
<br>

<script>

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


window.onscroll = function() {scrollIndicator()};

function scrollIndicator() {
  // Scroll distance calculation
  let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  let scrolled = (winScroll / height) * 100;

  // Set the width of progress bar
  document.getElementById("scroll-progress").style.width = scrolled + "%";
}
</script>
</body>
</html>