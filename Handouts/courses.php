<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CampusXchange Courses | Learn from YouTube Tutorials</title>
<meta name="description" content="Explore CampusXchange's YouTube courses — from web development to programming. Watch uploaded lessons or get notified about upcoming ones. Learn, grow, and build your skills with us!">
<meta name="keywords" content="CampusXchange, YouTube Courses, Web Development Free Course, Programming Courses, HTML Free Course, CSS Basic to advance, JavaScript Full Tutorials, Full stack Tutorials, Learn online videos">
<meta name="author" content="CampusXchange">
<link rel="canonical" href="https://campusxchange.wuaze.com/handouts/courses">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://campusxchange.wuaze.com/handouts/courses">
<meta property="og:title" content=" Learn Free YouTube Tutorials from Campusxchange">
<meta property="og:description" content="Explore CampusXchange's YouTube courses — from web development to programming. Watch uploaded lessons or get notified about upcoming ones. Learn, grow, and build your skills with us!">
<meta property="og:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-courses.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://campusxchange.wuaze.com/handouts/courses">
<meta property="twitter:title" content=" Learn Free YouTube Tutorials from Campusxchange">
<meta property="twitter:description" content="Explore CampusXchange's YouTube courses — from web development to programming. Watch uploaded lessons or get notified about upcoming ones. Learn, grow, and build your skills with us!">
<meta property="twitter:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-courses.jpg">

<!-- styles -->
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
<!--favicon ------------------------------------------------------------------------------>
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">

  <style>
    :root {
      --primary-color: #263F5A;
      --secondary-color: #F8627B;
      --text-dark: #222;
      --text-light: #555;

    }
    .section-title {
      text-align:left;
      margin: 1rem 5rem;
      font-size: 1.8rem;
      color: var(--primary-color);
    }

    .courses-grid {
      display:flex;
      padding: 0 1.5rem 3rem;
      width: 80%;
      max-width: 1200px;
      margin:2.5% 10%;

    }

    .course-card {
      background: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      overflow: hidden;
      transition: transform 0.3s ease;
      width: 45%;
      margin: 1.5% 2.5%;
    }

    .course-card:hover {
      transform: translateY(-5px);
    }

    iframe {
      width: 100%;
      height: 250px;
      border: none;
    }

    .course-content {
      padding: 1rem 1.2rem 1.5rem;
      text-align: center;
    }

    .course-content h3 {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
      color: var(--text-dark);
    }

    .course-content p {
      color: var(--text-light);
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .cta-btn {
      background: var(--primary-color);
      color: #fff;
      padding: 0.6rem 1.4rem;
      border: none;
      border-radius: var(--radius);
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    .cta-btn:hover {
      background: #003bb5;
    }


    @media (max-width: 700px) {
     .courses-grid {
      display:block;
      padding: 1rem 0rem;
      width: 100%;
      max-width:100%;
      margin:2.5% 0%;

    }

    .course-card {
      width: 90%;
      margin: 2.5% 5%;
    }
 .section-title {

      margin: 1rem 0rem;
      font-size: 1.5rem;

    }
    }
  </style>
</head>

<body>
    <?php include "../components/header.php" ?>

  <!-- <header>
    <h1>CampusXchange YouTube Courses</h1>
    <p>Enhance your learning with our free YouTube tutorials. Explore uploaded courses or stay tuned for upcoming ones.</p>
  </header> -->

  <!-- Uploaded Courses -->
  <section>
    <h2 class="section-title">Uploaded Courses</h2>
    <div class="courses-grid">
      <!-- Example Course 1 -->
      <div class="course-card">
        <iframe src="https://www.youtube.com/embed/oAWg40dB-dA?si=ElK58A2gW_pljl-x"  title="HTML Basics - CampusXchange"></iframe>
        <div class="course-content">
          <h3>HTML Tutorial From Zero to Hero</h3>
          <p>Learn the fundamentals of HTML including structure, tags, form elements , container , media element etc and  your first webpage.</p>
          <a href="https://www.youtube.com/embed/oAWg40dB-dA?si=ElK58A2gW_pljl-x" title="Learn Html From Zero to Hero" target="_blank" class="cta-btn">Watch Now</a>
        </div>
      </div>

      <!-- Example Course 2 -->
      <div class="course-card">
        <iframe src="https://www.youtube.com/embed/WJ-Ng1v3lPc?si=fbO1YI4vO6YKyQXn" title="CSS Tutorial - CampusXchange"></iframe>
        <div class="course-content">
          <h3>CSS Tutorial From Dark to Light Mode</h3>
          <p>Master website styling with CSS—learn colors, layout, and responsive design.</p>
          <a href="https://www.youtube.com/embed/oAWg40dB-dA?si=ElK58A2gW_pljl-x" title="Learn Html From Zero to Hero" target="_blank" class="cta-btn">Watch Now</a>
        </div>
      </div>
    </div>
  </section>
<!-- Footer section -->
 <br>
<?php include "../components/footer.php" ?>
</body>
</html>
