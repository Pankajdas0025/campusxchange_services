<?php
include "../../src/conn.php";
include "../../src/config.php";
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
<title>How 5G is Powering the Internet of Things Revolution in 2025</title>
<meta name="description" content="Explore how 5G is accelerating IoT innovation, connecting smart devices, and transforming industries worldwide in 2025. Discover its impact on healthcare, cities, and automation.">
<meta name="keywords" content="5G technology 2025, IoT revolution, smart cities, connected devices, 5G and IoT, technology trends 2025">
<meta property="og:title" content="How 5G is Powering the Internet of Things Revolution in 2025">
<meta property="og:description" content="Discover how 5G is transforming IoT, powering smart devices, healthcare, and automation in 2025.">
<meta property="og:image" content="https://campusxchange.wuaze.com/assets/Images/blog-images/5G and IoT 2025.jpg">
<link rel="canonical" href="https://campusxchange.wuaze.com/handouts/blogs/blog-5g-iot-2025.php">

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
.container {  max-width:100vw; margin:auto;  padding:0.5rem 0.25rem; font-size: 15px; text-align: left; }
h1 {font-size: 30px;}
h2 { font-size: 20px;}}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php include "../../components/header.php"; ?>
<section class="container">
<main>
    <h1>How 5G is Powering the Internet of Things Revolution in 2025</h1>
    <img src="../../assets/Images/blog-images/5G and IoT 2025.jpg" alt="5G and IoT 2025" class="blog-img">

    <p><strong>5G technology</strong> is transforming the way the world connects, enabling faster data speeds, ultra-low latency, and greater network capacity. In 2025, this innovation is powering a new wave of <strong>Internet of Things (IoT)</strong> applications that are reshaping industries, smart cities, and everyday life.</p>

    <h2>1. Seamless Connectivity Across Devices</h2>
    <p>With 5G, billions of IoT devices — from smart appliances to wearable sensors — can now communicate in real time. The improved bandwidth ensures uninterrupted data transfer, making connected ecosystems more reliable and efficient than ever before.</p>

    <h2>2. Driving Smart City Innovation</h2>
    <p>5G networks enable smart traffic systems, waste management, and energy-efficient buildings. These technologies rely on IoT sensors to collect and process data instantly, helping cities reduce congestion, pollution, and power waste.</p>

    <h2>3. Revolutionizing Healthcare and Automation</h2>
    <p>Remote surgeries, connected ambulances, and real-time patient monitoring are becoming possible with 5G-powered IoT devices. The ultra-fast response times ensure accurate data transmission, improving both diagnosis and patient safety.</p>

    <h2>4. Industrial and Agricultural Efficiency</h2>
    <p>Manufacturers use IoT sensors connected via 5G to monitor equipment health, predict failures, and optimize production. Similarly, farmers leverage IoT-based drones and soil sensors for precision agriculture, increasing yields while conserving resources.</p>

    <h2>5. The Road Ahead: A Fully Connected Future</h2>
    <p>As 5G expands globally, the number of connected devices will surge. From autonomous vehicles to smart homes, the combination of 5G and IoT will redefine how humans, machines, and data interact — creating a seamlessly connected digital future.</p>

    <p><strong>In essence, 5G is the backbone of the IoT revolution, fueling innovations that make the world smarter, safer, and more efficient.</strong></p>

    <div class="like-section">
        <button class="like-btn" data-blog="blog-5g-iot-2025"
        <?php echo (isset($_SESSION['liked_blogs']) && in_array('blog-5g-iot-2025', $_SESSION['liked_blogs'])) ? 'disabled' : ''; ?>>
        👍 Like (<span class="like-count" id="like-blog-5g-iot-2025"><?php echo getLikes($conn, "blog-5g-iot-2025"); ?></span>)
        </button>
    </div>
</main>


<aside>
    <h3>More Blogs</h3>
 <?php include "../../components/previous_blog.php" ?>
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
