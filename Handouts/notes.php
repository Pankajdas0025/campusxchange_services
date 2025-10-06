

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
  <div class="Logo"><img src="../assets/Images/transparent-logo-campusxchange.png" title="CampusXchange Logo"></div>
  </header>
<?php include "../components/header.php" ?>
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
    <!-----all -Notes section ------------------------------------------------------------->


<section class="block notes-section" data-aos="fade-up" data-aos-duration="1000">
  <h2><i class="fa-solid fa-book-open-reader"></i> Tech Notes That Actually Make Sense</h2>
  <p>
    Learning technology doesn’t have to feel confusing. At <strong>CampusXchange</strong>, we’ve carefully created
    <strong>clear, concise, and practical notes</strong> for trending technologies — from <strong>Python</strong> to <strong>Machine Learning</strong>,
    and <strong>Web Development</strong> to <strong>Artificial Intelligence</strong>.
  </p>

  <ul class="notes-highlights">
    <li><i class="fa-solid fa-code"></i> <strong>Programming Languages</strong> – PHP, Python, JavaScript, C/C++, Java</li>
    <li><i class="fa-solid fa-brain"></i> <strong>Artificial Intelligence & Machine Learning</strong> – Core Concepts, Algorithms, and Models</li>
    <li><i class="fa-solid fa-chart-line"></i> <strong>Data Science</strong> – Numpy, Pandas, Data Cleaning, Visualization</li>
    <li><i class="fa-solid fa-laptop-code"></i> <strong>Web Development</strong> – HTML, CSS, JavaScript, PHP, React, Bootstrap, and more</li>
    <li><i class="fa-solid fa-database"></i> <strong>Databases</strong> – MySQL, MongoDB, Firebase</li>
    <li><i class="fa-solid fa-toolbox"></i> <strong>Developer Tools</strong> – Git, GitHub, APIs, JSON, Postman</li>
    <li><i class="fa-solid fa-diagram-project"></i> <strong>DSA</strong> – Sorting, Trees, Graphs, Interview Prep Notes</li>
  </ul>

  <p>
    Each note is built for <strong>clarity and practical understanding</strong> — featuring examples, diagrams, and simplified explanations.
    Perfect for <strong>students, self-learners, and interview preparation</strong>.
  </p>

  <a href="assignment" class="explore-notes-btn">
    <i class="fa-solid fa-arrow-right"></i> Explore Coding Assignments
  </a>
</section>

<!-- paid Notes section -->
<section class="paid-notes-section">
  <h2>Premium Notes</h2>
  <div class="paid-notes-list">
    <div class="paid-note-box">
      <h3>Advanced Python for Data Science</h3>
      <p>Unlock advanced Python concepts, libraries, and real-world data science workflows. Includes code samples and project ideas.</p>
      <div class="paid-note-footer">
        <span class="note-price">₹199</span>
        <a href="#" class="buy-btn">Buy Now</a>
      </div>
    </div>
    <div class="paid-note-box">
      <h3>Machine Learning Interview Kit</h3>
      <p>Comprehensive ML notes, cheat sheets, and solved interview questions. Perfect for job prep and revision.</p>
      <div class="paid-note-footer">
        <span class="note-price">₹249</span>
        <a href="#" class="buy-btn">Buy Now</a>
      </div>
    </div>
    <div class="paid-note-box">
      <h3>Full Stack Web Dev Guide</h3>
      <p>Step-by-step guide covering HTML, CSS, JS, React, and backend essentials. Includes diagrams and mini-projects.</p>
      <div class="paid-note-footer">
        <span class="note-price">₹299</span>
        <a href="#" class="buy-btn">Buy Now</a>
      </div>
    </div>
  </div>
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
<?php include "../components/footer.php" ?>
<!-- fotter section end  --------------------------------------------------------------------------------->
<script src="../script.js"></script>

</body>
</html>
