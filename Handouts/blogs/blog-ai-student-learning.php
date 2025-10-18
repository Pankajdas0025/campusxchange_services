<?php
include "../../src/conn.php";
session_start();

// Like system logic (same as main page)
if(isset($_POST['like_blog_id'])){
    $blog_id = $_POST['like_blog_id'];
    if(!isset($_SESSION['liked_blogs'])) $_SESSION['liked_blogs'] = [];
    if(!in_array($blog_id, $_SESSION['liked_blogs'])){
        $result = $conn->query("SELECT * FROM blog_likes WHERE blog_id='$blog_id'");
        if($result->num_rows > 0){
            $conn->query("UPDATE blog_likes SET likes = likes + 1 WHERE blog_id='$blog_id'");
        } else {
            $conn->query("INSERT INTO blog_likes (blog_id, likes) VALUES ('$blog_id', 1)");
        }
        $_SESSION['liked_blogs'][] = $blog_id;
    }

    $count_result = $conn->query("SELECT likes FROM blog_likes WHERE blog_id='$blog_id'");
    $row = $count_result->fetch_assoc();
    echo $row['likes'];
    exit;
}

function getLikes($conn, $blog_id){
    $result = $conn->query("SELECT likes FROM blog_likes WHERE blog_id='$blog_id'");
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        return $row['likes'];
    }
    return 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>How AI is Transforming Student Learning | CampusXchange</title>
<meta name="description" content="Discover how Artificial Intelligence is reshaping student learning with personalized tools, adaptive systems, and smart feedback — CampusXchange.">
<meta name="keywords" content="AI in education, artificial intelligence students, personalized learning AI, education technology, adaptive learning tools">
<meta name="author" content="CampusXchange">
<link rel="canonical" href="https://campusxchange.wuaze.com/handouts/blogs/blog-ai-student-learning.php">

<!-- Styles -->
<link rel="stylesheet" href="../../style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">

<style>
:root {
  --primary-color: #004080;
  --secondary-color: #f43f5e;
  --bg-light: #f9fafb;
  --radius: 10px;
  --shadow: 0 8px 30px rgba(2,6,23,0.08);
}
.container { display:flex; gap:2rem; max-width:100vw; margin:auto; padding:2.5rem; }
main { flex:3; background:#fff; padding:2rem; border-radius:var(--radius); box-shadow:var(--shadow); }
aside { flex:1; }
h1 { color:var(--primary-color); margin-bottom:1rem; }
.blog-img { width:100%; height:300px; object-fit:cover; border-radius:var(--radius); margin-bottom:1rem; }
.like-btn { background: var(--primary-color); color:#fff; border:none; padding:0.6rem 1.2rem; border-radius:var(--radius); cursor:pointer; margin-top:1rem; }
.like-btn:hover { background: var(--secondary-color); }
aside h3 { color:#004080; margin-bottom:1rem; }
aside .sidebar-item { background:#fff; padding:0.6rem; border-radius:var(--radius); margin-bottom:1rem; box-shadow:var(--shadow); }
aside .sidebar-item a { text-decoration:none; color:#004080; }
@media(max-width:900px){
.container{flex-direction:column;}
.blog-img{height:200px;}
.container {  max-width:100vw; margin:auto; background-color: red; padding:0.5rem 0.25rem; font-size: 15px; text-align: left; }
h1 {font-size: 30px;}
h2 { font-size: 20px;}}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
    <div class="Logo"><img src="../assets/Images/campusxchange-logo-transparent.png" title="CampusXchange Logo"></div>
</header>
<?php include "../../components/header.php"; ?>

<section class="container">
<main>
    <h1>How AI is Transforming Student Learning</h1>
    <img src="../assets/Images/development-services.jpg" alt="AI in Education" class="blog-img">

    <p><strong>Artificial Intelligence (AI)</strong> is revolutionizing education by introducing new ways of personalized learning, faster assessment, and smarter content delivery. It enables adaptive systems that tailor lessons to each student’s strengths, weaknesses, and pace of learning.</p>

    <h2>1. Personalized Learning Paths</h2>
    <p>AI systems analyze student data to understand learning patterns and recommend custom study materials. This means no two students have to follow the same approach — AI helps each learner focus on what truly matters to them.</p>

    <h2>2. Smart Feedback & Evaluation</h2>
    <p>AI-powered assessment tools instantly evaluate assignments, quizzes, and essays. Students receive feedback within seconds, helping them correct mistakes faster and learn continuously.</p>

    <h2>3. AI Tutors and Virtual Assistants</h2>
    <p>AI bots like ChatGPT, Duolingo bots, and others act as 24x7 learning companions, answering queries, guiding practice sessions, and explaining complex topics in easy terms.</p>

    <h2>4. Preparing Students for Future Careers</h2>
    <p>By interacting with AI tools early, students get familiar with technologies shaping future industries — from automation to data analytics and robotics.</p>

    <p><strong>In short, AI is not replacing teachers — it’s empowering them and students to reach their full potential.</strong></p>

    <div class="like-section">
        <button class="like-btn" data-blog="blog-ai-student-learning"
        <?php echo (isset($_SESSION['liked_blogs']) && in_array('blog-ai-student-learning', $_SESSION['liked_blogs'])) ? 'disabled' : ''; ?>>
        👍 Like (<span class="like-count" id="like-blog-ai-student-learning"><?php echo getLikes($conn, "blog-ai-student-learning"); ?></span>)
        </button>
    </div>
</main>

<aside>
    <h3>More Blogs</h3>
    <!-- <?php include "../../components/previous_blog.php" ?> -->
</aside>
</section>

<script>
$(document).ready(function(){
    $('.like-btn').click(function(){
        var blogId = $(this).data('blog');
        var span = $('#like-' + blogId);
        $.post('', {like_blog_id: blogId}, function(data){
            span.text(data);
        });
        $(this).prop('disabled', true);
    });
});
</script>

<?php include "../../components/footer.php"; ?>
</body>
</html>
