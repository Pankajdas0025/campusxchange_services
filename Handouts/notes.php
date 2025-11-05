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
  <title>Programming, AI & ML Notes - Free and paid PDFs & Study Guides | CampusXchange</title>
  <meta name="title" content="Programming, AI & ML Notes - Free PDFs & Study Guides | CampusXchange">
  <meta name="description" content="CampusXchange Notes — Programming, AI, Data Science, Web Dev, ML notes curated for students and developers. Free, easy to read, and exam-ready.">
  <meta name="keywords" content="programming notes for students,tech notes ,tmu notes,tmu study material ccsit ,tmu study material FOE , DSA notes programming, AI ML full course notes, data science project notes, python machine learning notes">
  <meta name="author" content="CampusXchange"/>
  <link rel="canonical" href="https://campusxchange.wuaze.com/handouts/notes">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://campusxchange.wuaze.com/handouts/notes">
  <meta property="og:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="og:description" content="Join CampusXchange and explore internships, live projects, and opportunities to build your career. Apply online today!">
  <meta property="og:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-assignment.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://campusxchange.wuaze.com/handouts/notes">
  <meta property="twitter:title" content="CampusXchange - Find Internships, Projects & Opportunities">
  <meta property="twitter:description" content="CampusXchange helps students connect with internships, live projects, and career opportunities. 100% online and easy to apply!">
  <meta property="twitter:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-assignment.jpg">

<!-- styles -->
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" href="../styles/note.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--favicon ------------------------------------------------------------------------------>
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">


</head>
<body>
<!--Note page Header and navbar ----------------------------------------------------------------------------------------->
<?php include "../components/header.php" ?>
 <!--Note page Header and navbar  end ----------------------------------------------------------------------------------------->

<!------Notes section start -------------------------------------------------------------->
<!--Search box --------------------------------------------------------------------------->
<main>
  <br>
 <section  id="NotesContent">
      <br>
    <h1>Programming Notes PDFs</h1>
    <p>* Technical Study Notes | Tech notes</p>
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
<div class='Note_footer'><a  href='{$row['noteLink']}'>Read <i class='fa-solid fa-eye'></i><a  href=' $downloadLink ' download >Download <i class='fa-solid fa-download'></i></a></div>
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

    while ($count < 4 && $row = $result->fetch_assoc()) {

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
<div class='Note_footer'><a  href='{$row['noteLink']}'>Read<i class='fa-solid fa-eye'></i></a> <a  href=' $downloadLink ' download >Download <i class='fa-solid fa-download'></i></a></div>
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
    <!-----all -Notes section ------------------------------------------------------------->


<section class="block notes-section" data-aos="fade-up" data-aos-duration="1000">
  <h2><i class="fa-solid fa-book-open-reader"></i> Tech Notes That Actually Make Sense</h2>
  <p>
    Learning technology doesn't have to feel confusing. At <strong>CampusXchange</strong>, we've carefully created
    <strong>clear, concise, and practical notes</strong> for trending technologies — from <strong>Python</strong> to <strong>Machine Learning</strong>,
    and <strong>Web Development</strong> to <strong>Artificial Intelligence</strong>.
  </p>

  <ul class="notes-highlights">
    <li><i class="fa-solid fa-code"></i> <strong>Programming Languages</strong> - PHP, Python, JavaScript, C/C++, Java</li>
    <li><i class="fa-solid fa-brain"></i> <strong>Artificial Intelligence & Machine Learning</strong> - Core Concepts, Algorithms, and Models</li>
    <li><i class="fa-solid fa-chart-line"></i> <strong>Data Science</strong> - Numpy, Pandas, Data Cleaning, Visualization</li>
    <li><i class="fa-solid fa-laptop-code"></i> <strong>Web Development</strong> - HTML, CSS, JavaScript, PHP, React, Bootstrap, and more</li>
    <li><i class="fa-solid fa-database"></i> <strong>Databases</strong> - MySQL, MongoDB, Firebase</li>
    <li><i class="fa-solid fa-toolbox"></i> <strong>Developer Tools</strong> - Git, GitHub, APIs, JSON, Postman</li>
    <li><i class="fa-solid fa-diagram-project"></i> <strong>DSA</strong> - Sorting, Trees, Graphs, Interview Prep Notes</li>
  </ul>
  <p>
    Each note is built for <strong>clarity and practical understanding</strong> — featuring examples, diagrams, and simplified explanations.
    Perfect for <strong>students, self-learners, and interview preparation</strong>.
  </p>

  <a href="assignment" class="explore-notes-btn">
    <i class="fa-solid fa-arrow-right"></i> Explore Coding Assignments
  </a>
</section>

  <!-- Paid Notes Section -->
<section class="paid-notes-section">
  <h2>Premium Notes</h2>
  <div class="paid-notes-list">

    <!-- Note 1 -->
    <div class="paid-note-box">
      <div class="note-img">
        <img src="../assets/Notes/Master Full Stack Web Development with PHP By Campusxchange.png" alt="Full Stack Web Development Notes" onclick="openPreview(this)">
        <a href="javascript:void(0)" class="view-demo" onclick="openPreview(this.previousElementSibling)">View Demo</a>
      </div>
      <h3>Master Full Stack Web Development with PHP <br>All-in-One Notes Combo!</h3>
      <p>Take your web development skills to the next level with our Full Stack with PHP Combo Notes, exclusively from CampusXchange.
      This combo pack covers everything you need to become an industry-ready web developer — from frontend to backend, with real-world project insights and interview preparation materials.</p>
      <div class="paid-note-footer">
        <span class="note-price">₹99</span>
        <a href="https://www.instagram.com/p/DQVJz0ljEbB/" class="buy-btn">Buy Now</a>
      </div>
    </div>

    <!-- Note 2 -->
    <div class="paid-note-box">
      <div class="note-img">
        <img src="../assets/Notes/Master Full Stack Web Development with PHP By Campusxchange.png" alt="DBMS & SQL Notes" onclick="openPreview(this)">
        <a href="javascript:void(0)" class="view-demo" onclick="openPreview(this.previousElementSibling)">View Demo</a>
      </div>
      <h3>Master Database Management & SQL Queries Like a Pro!</h3>
      <p>Understand the backbone of every modern application — Database Management Systems (DBMS) and Structured Query Language (SQL) — with this exclusive CampusXchange Notes Combo.
      Perfect for students, interns, and aspiring developers, this combo gives you a clear and practical understanding of how data is stored, managed, and accessed efficiently.</p>
      <div class="paid-note-footer">
        <span class="note-price">₹99</span>
        <a href="https://www.instagram.com/p/DQVJz0ljEbB/" class="buy-btn">Buy Now</a>
      </div>
    </div>

    <!-- Note 3 -->
    <div class="paid-note-box">
      <div class="note-img">
        <img src="../assets/Notes/Master Full Stack Web Development with PHP By Campusxchange.png" alt="DSA & C++ Notes" onclick="openPreview(this)">
        <a href="javascript:void(0)" class="view-demo" onclick="openPreview(this.previousElementSibling)">View Demo</a>
      </div>
      <h3>DSA & C++ - Complete Notes Combo</h3>
      <p>Unlock the power of problem-solving and programming efficiency with our DSA & C++ Notes Combo, exclusively available on CampusXchange.
      This combo is designed for students, coders, and job aspirants who want to build a strong foundation in Data Structures and Algorithms using the C++ language.</p>
      <div class="paid-note-footer">
        <span class="note-price">₹99</span>
        <a href="https://www.instagram.com/p/DQVJz0ljEbB/" class="buy-btn">Buy Now</a>
      </div>
    </div>

  </div>
</section>

<!-- Image Preview Modal -->
<div id="imgModal" class="img-modal" onclick="closePreview()">
  <span class="close-btn" onclick="closePreview()">&times;</span>
  <img class="modal-content" id="modalImg">
</div>

</main>
<a href="https://campusxchange.wuaze.com/Internship-program" title="Best Internship Program by campusxchange"><button id="btn1">👋Join Our Internship Program</button></a>
<button id="btn2" onclick="RemoveIpop()">&times;</button>


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


function openPreview(img) {
  document.getElementById("imgModal").style.display = "block";
  document.getElementById("modalImg").src = img.src;
}

function closePreview() {
  document.getElementById("imgModal").style.display = "none";
}


</script>
<!-- fotter section  --------------------------------------------------------------------------------->
<?php include "../components/footer.php" ?>
<!-- fotter section end  --------------------------------------------------------------------------------->
<script src="../script.js"></script>

</body>
</html>
