<?php
session_start(); // Start session to track likes
include "../src/conn.php";
// Handle AJAX like requests
if(isset($_POST['like_blog_id'])){
    $blog_id = $_POST['like_blog_id'];

    if(!isset($_SESSION['liked_blogs'])) $_SESSION['liked_blogs'] = [];

    // Only allow one like per session per blog
    if(!in_array($blog_id, $_SESSION['liked_blogs'])){
        $result = $conn->query("SELECT * FROM blog_likes WHERE blog_id='$blog_id'");
        if($result->num_rows > 0){
            $conn->query("UPDATE blog_likes SET likes = likes + 1 WHERE blog_id='$blog_id'");
        } else {
            $conn->query("INSERT INTO blog_likes (blog_id, likes) VALUES ('$blog_id', 1)");
        }
        $_SESSION['liked_blogs'][] = $blog_id;
    }

    // Return updated like count
    $count_result = $conn->query("SELECT likes FROM blog_likes WHERE blog_id='$blog_id'");
    $row = $count_result->fetch_assoc();
    echo $row['likes'];
    exit;
}

// Function to get likes
function getLikes($conn, $blog_id){
    $result = $conn->query("SELECT likes FROM blog_likes WHERE blog_id='$blog_id'");
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        return $row['likes'];
    }
    return 0;
}
// session_unset();
// session_reset();
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Primary Meta Tags -->
 <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tech Blogs & Study Guides | CampusXchange</title>
<meta name="title" content="Tech Blogs & Study Guides | CampusXchange">
<meta name="description" content="Explore CampusXchange blogs for free, exam-ready notes, tutorials, and study guides on programming, AI, ML, Data Science, and Web Development. Learn fast and stay ahead!">
<meta name="keywords" content="programming blogs for students, AI tutorials, ML cheat sheet pdf, data science notes, web development guides, Python study notes, DSA tutorials, AI ML study material, free programming guides, tech study blogs">
<meta name="author" content="CampusXchange"/>
<meta name="robots" content="index, follow" />
<link rel="canonical" href="https://campusxchange.wuaze.com/handouts/blog" />
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://campusxchange.wuaze.com/handouts/blog">
<meta property="og:title" content="Tech Blogs & Study Guides | CampusXchange">
<meta property="og:description" content="Discover free programming, AI, ML, Data Science, and Web Development notes and study guides on CampusXchange blog. Learn, explore, and boost your skills!">
<meta property="og:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-all.jpeg">
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url"  href="https://campusxchange.wuaze.com/handouts/blog" />
<meta property="twitter:title" content="Tech Blogs & Study Guides | CampusXchange">
<meta property="twitter:description" content="Read CampusXchange tech blogs for students: programming, AI, ML, data science, and web development notes. Free guides, tutorials, and cheat sheets.">
<meta property="twitter:image" content="https://campusxchange.wuaze.com/assets/Images/og-images/og-all.jpeg">
<!-- styles -->
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--favicon ------------------------------------------------------------------------------>
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "How AI is Transforming Student Learning",
  "author": {
    "@type": "Organization",
    "name": "CampusXchange"
  },
  "publisher": {
    "@type": "Organization",
    "name": "CampusXchange",
    "logo": {
      "@type": "ImageObject",
      "url": "https://campusxchange.wuaze.com/assets/favicon_io/favicon-32x32.png"
    }
  },
  "mainEntityOfPage": "https://campusxchange.in/blogs",
  "image": "https://campusxchange.wuaze.com/assets/Images/og-image/og-all.jpeg"",
  "datePublished": "2025-10-13",
  "description": "Explore how Artificial Intelligence is reshaping student learning through personalized education, instant feedback, and smart tools for modern learners."
}
</script>
<style>
:root {
  --primary-color: #004080;
  --secondary-color: #f43f5e;
  --bg-light: #f9fafb;
  --radius: 10px;
  --shadow: 0 8px 30px rgba(2,6,23,0.08);
}
body { font-family: 'Poppins', sans-serif; background: var(--bg-light); margin:0; padding:0; }
.container { display:flex; gap:2rem; max-width:1200px; margin:auto; padding:2rem; }
main { flex:3; }
aside { flex:1; }
h2 { margin-bottom:1rem; color:var(--primary-color); }
.blog-item { margin-bottom:1.5rem; background:#fff; border-radius:var(--radius); box-shadow:var(--shadow); padding:1rem; }
.blogmainImg { height:200px; overflow:hidden; border-radius:var(--radius); }
.blogmainImg img { width:100%; height:100%; object-fit:cover; }
.read-more { display:inline-block; margin-top:0.5rem; padding:0.5rem 1rem; background:var(--primary-color); color:#fff; border-radius:var(--radius); text-decoration:none; }
.read-more:hover { background:var(--secondary-color); }
.like-btn { background: var(--primary-color); color:#fff; border:none; padding:0.5rem 1rem; border-radius:var(--radius); cursor:pointer; margin-top:0.5rem; }
.like-btn:disabled { background: grey; cursor: not-allowed; }
.like-btn:hover:enabled { background: var(--secondary-color); }
aside h3 { margin-bottom:1rem; color:#004080; }
aside .sidebar-item { margin-bottom:1rem; padding:0.5rem; background:#fff; border-radius:var(--radius); box-shadow:var(--shadow); }
aside .sidebar-item a { text-decoration:none; color:#004080; }
@media screen and (max-width:900px){.container{flex-direction:column;}}
@media screen and (max-width:600px){.blogmainImg{height:30vh;}}
</style>
</head>
<body>
<?php include "../components/header.php" ?>
<section class="container">
<main>
    <h2>New Blogs</h2>
<!-- ----------1. Add new blog--------------2. add in to blogs folder----------------------------3. add image--------------------------------------------------------------- -->
<div class="blog-item">
    <div class="blogmainImg">
        <img src="../assets/Images/ai-tools-2025..jpeg" alt="AI Tools 2025" title="Top AI Tools for Developers and Students in 2025">
    </div>
    <h3>Top AI Tools for Developers and Students in 2025</h3>
    <p>Explore the best AI-powered tools that boost productivity, automate workflows, and simplify complex programming tasks in 2025...</p>
    <a href="blogs/blog-top-ai-tools-2025.php" class="read-more">Read More</a>
    <div class="like-section">
        <button class="like-btn" data-blog="blog-top-ai-tools-2025"
        <?php echo (isset($_SESSION['liked_blogs']) && in_array('blog-top-ai-tools-2025', $_SESSION['liked_blogs'])) ? 'disabled' : ''; ?>>
        👍 Like (<span class="like-count" id="like-blog-top-ai-tools-2025"><?php echo getLikes($conn, "blog-top-ai-tools-2025"); ?></span>)
        </button>
    </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------------- -->


</main>

<aside>
    <h3>Previous Blogs</h3>
       <?php include "../components/previous_blog.php" ?>
</aside>
</section>

<script>
$(document).ready(function(){
    $('.like-btn').click(function(){
        var btn = $(this);
        var blogId = btn.data('blog');
        var span = $('#like-' + blogId);

        btn.prop('disabled', true); // Disable after click
        $.post('', {like_blog_id: blogId}, function(data){
            span.text(data);
        });
    });
});
</script>

<?php include "../components/footer.php" ?>
</body>
</html>
