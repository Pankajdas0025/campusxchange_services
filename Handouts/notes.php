

<?php include "../src/conn.php";
      include "../src/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Primary Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Programming, AI & ML Notes - Free PDFs & Study Guides | CampusXchange</title>
  <meta name="title" content="Programming, AI & ML Notes - Free PDFs & Study Guides | CampusXchange">
  <meta name="description" content="CampusXchange Notes — Programming, AI, Data Science, Web Dev, ML notes curated for students and developers. Free, easy to read, and exam-ready.">
  <meta name="keywords" content="programming notes for students, python data science notes free, machine learning cheat sheet pdf, AI notes for beginners, web development notes 2025, ML interview prep notes, DSA notes programming, AI ML full course notes, data science project notes, python machine learning notes">
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
<link rel="stylesheet" href="../styles/note.css" type="text/css">
<link rel="stylesheet" href="../styles/animation.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--favicon ------------------------------------------------------------------------------>
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">


</head>
<body>
  <!-- animated cursor ------------------->
 <div class="cursor"></div>
<!-- animated cursor end ---------------->
   <!--Note page Header and navbar ----------------------------------------------------------------------------------------->
     <header>
  <div class="Logo"><img src="../assets/Images/campusxchange-logo.svg" title="CampusXchange Logo"></div>
  </header>
<div class="topnav" id="myTopnav">
  <a href="../home" class="active">Home</a>
   <div class="dropdown">
    <button class="dropbtn">Services
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../services/web-development">Website Development</a>
      <a href="../services/seo">SEO</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Handouts
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="notes" style="background-color: #555;">Notes</a>
      <a href="blog">Blogs</a>
      <a href="assignment">Programming Assignment</a>
    </div>
  </div>
  <a href="../internship-program">Mentorship & Internship</a>
  <a href="../about">About</a>
  <a href="../lettalk">Let's Talk</a>
    <!--// mobile Togglebar ----------------------------------------------------------------------------------------->
 <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
 <!--Note page Header and navbar  end ----------------------------------------------------------------------------------------->

<!------Notes section start -------------------------------------------------------------->
<!--Search box --------------------------------------------------------------------------->
<main>
  <br>
 <section  id="NotesContent">
      <br>
    <h1>Notes</h1>
    <p>* Technical Study Notes</p>
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="search" placeholder="eg. Datascience,PHP,SQL" style="font-size:16px; font-family:'Poppins', sans-serif;">
    <button type="submit" class="btn btn-info btn-lg"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
    </form>

       <br>
       <br>
<!------Notes section start from backend   -------------------------------------------------------------->
  <?php
if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
    $search = $conn->real_escape_string($_GET['search']);
    $query = "SELECT * FROM notes WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
    $result = $conn->query($query);
     if ($result->num_rows!=0) {
        while ($row = $result->fetch_assoc())

        {
       $originalLink = $row['noteLink'];

    // Extract the FILE ID using regex   // this help me to convert drive view link into donloadable link ...............................
    preg_match("/\/d\/(.*?)\//", $originalLink, $matches);
    $fileId = $matches[1] ?? null;

    if ($fileId) {
        $downloadLink = "https://drive.google.com/uc?export=download&id=" . $fileId;

    }
           echo "<div class='block Note_box'>
        <h2 id='Note_tittle'>{$row['title']}<button id='span'  onclick=\"copyLink('{$row['noteLink']}')\"><i class='fa-solid fa-share'></i></button> </h2><br>
        <textarea id='Note_content' readonly>{$row['content']}</textarea>
<div class='Note_footer'><a  href='{$row['noteLink']}'>Read <a  href=' $downloadLink ' download >Download</a></div>
      </div>";


        }

    } else
    {


      echo "No data Found!";

    }
}

else


//for permanent 3 iteam display here ..............................................................
{
  $result = $conn->query("SELECT * FROM notes ORDER BY created_at DESC");
  $count = 0;

    while ($count < 3 && $row = $result->fetch_assoc()) {

       $originalLink = $row['noteLink'];

    // Extract the FILE ID using regex   // this help me to convert drive view link into donloadable link ...............................
    preg_match("/\/d\/(.*?)\//", $originalLink, $matches);
    $fileId = $matches[1] ?? null;

    if ($fileId) {
        $downloadLink = "https://drive.google.com/uc?export=download&id=" . $fileId;

    }

     echo "<div class='block Note_box'>
        <h2 id='Note_tittle'>{$row['title']}<button id='span'  onclick=\"copyLink('{$row['noteLink']}')\"><i class='fa-solid fa-share'></i></button> </h2><br>
        <textarea id='Note_content' readonly>{$row['content']}</textarea>
<div class='Note_footer'><a  href='{$row['noteLink']}'>Read</a> <a  href=' $downloadLink ' download >Download</a></div>
      </div>";

       $count++;
    }
}


    ?>

<!-- shareable link  --------------------------------------------------------->
    <script>

  function copyLink(relativePath) {
    const baseURL =relativePath;
    navigator.clipboard.writeText(baseURL).then(() => {
      alert("Copied blog link to clipboard!");
    }).catch(() => {
      alert("Failed to copy!");
    });
  }
      </script>
    <!------Notes section start from backend  end here  -------------------------------------------------------------->
    </section>
    <!------Notes section end here  -------------------------------------------------------------->
    <br>
    <br>

<section class="block notes-section">
  <h2>Tech Notes That Actually Make Sense</h2>
  <p>
    Learning tech doesn't have to be overwhelming. At <strong>CampusXchange</strong>, we’ve curated clear, concise, and beginner-to-pro notes for the most in-demand technologies —
    from Python to Machine Learning, from Web Dev to Artificial Intelligence.
  </p>

  <ul class="notes-highlights">
    <li>Programming Languages - PHP, Python, JavaScript, C/C++, Java</li>
    <li>Artificial Intelligence & Machine Learning - Core concepts, Algorithms, Models</li>
    <li>Data Science - Numpy, Pandas, Data Cleaning, Visualization</li>
    <li>Web Development - HTML, CSS, JS, PHP, React , Bootstrap , etc.</li>
    <li>Databases - MySQL, MongoDB, Firebase</li>
    <li>Dev Tools - Git, GitHub, APIs, JSON, Postman</li>
    <li>DSA - Sorting, Trees, Graphs, Interview Prep Notes</li>
  </ul>

  <p>
    All notes are crafted for clarity and practical understanding — with real-world examples, diagrams, cheat sheets, and simplified explanations.
    Ideal for students, beginners, and self-learners prepping for interviews or projects.
  </p>

  <a href="assignment" class="explore-notes-btn">Explore Coding Assignments →</a>
</section>
</main>
<a href="Internship-program" title="Click here.."><button id="btn1">👋Join Our Internship Program</button></a>
<button id="btn2" onclick="RemoveIpop()">&times;</button>
<button id="whatsappbtn"><img src="../assets/Images/whatsapp-logo.png" alt="whatsapp-logo Image"></button>

<script>

// to display popup box ................................................................................................
setTimeout(function()
{
document.querySelector("#btn1").style.display = "block";
document.querySelector("#btn2").style.display = "block";
document.querySelector("main").style.opacity = "0.3";
document.querySelector("main").style.pointerEvents ="none";

},10000)

// to remove cancel popup box ................................................................................................
function RemoveIpop()
{
  document.querySelector("#btn1").style.display = "none";
  document.querySelector("#btn2").style.display = "none";
  document.querySelector("main").style.opacity = "1";
  document.querySelector("main").style.pointerEvents ="fill";
}

</script>
      <!-- fotter section  --------------------------------------------------------------------------------->
        <section class="Footer">
 <div class="fbox" id="lastfooter"><br>
  <h3>CampusXchange</h3>
<p>We are committed to building a dynamic learning ecosystem where learners read and create, build and grow. From expert-curated notes, to insider tips, to real-time tech assignments, and guided internship & mentorship programs, we help you go from theory to doing your life's best work. Whether you're a student who wants to conquer full-stack development, a freelancer who wants to refine SEO skills, or a startup who's looking for web help — CampusXchange is where you can begin and strategize to become smarter.</p>
   <br>
    <hr>
</div>
     <h3>Quick Links-</h3>
     <div  id="quicklinks">
<a href="../home" class="active">Home</a><a href="../services/web-development">Website Development</a><a href="../services/seo">SEO</a><a href="notes" style="background-color: #555;">Notes</a> <a href="blog">Blogs</a> <a href="assignment">Programming Assignment</a><a href="../internship">Mentorship & Internship</a><a href="../about">About</a><a href="../lettalk">Let's Talk</a>
      </div>
     <br>
      <div class="contact">
        <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-phone"></i></a> &nbsp;+91 9155726625
        <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-envelope"></i></a> &nbsp;info@campusxchange.com
        <br><a href="#Contact-section" title="Social Platform"><i class="fa-solid fa-location-dot"></i></a> &nbsp;Kishanganj ,Bihar(855115)
      </div>

      <div  id="Sociallinks">
        <a href="#Courses-section" title="Social Platform"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#about-section"   title="Social Platform"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="#Results-section" title="Social Platform"><i class="fa-brands fa-facebook"></i></a>
        <a href="#Contact-section" title="Social Platform"><i class="fa-brands fa-youtube"></i></a>

      </div>
         <div  id="CopyRight">
       Copyright ©2025 CampusXchange. All Rights Reserved Designed By CampusXchange Team❤️
      </div>


        </section>
        <!-- fotter section end  --------------------------------------------------------------------------------->
<script src="../script.js"></script>

</body>
</html>
