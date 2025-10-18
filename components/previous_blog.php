
<?php
include "../src/conn.php";

// Get total number of rows
$countResult = $conn->query("SELECT COUNT(*) AS total FROM blog_likes");
$rowCount = $countResult->fetch_assoc()['total'];

// Calculate offset (skip latest 3)
$offset = max(0, $rowCount - 3);

// Fetch all except latest 3 (oldest first)
$sql = "SELECT * FROM blog_likes ORDER BY id ASC LIMIT $offset";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $page_url = htmlspecialchars($row['blog_id']);
        echo "<div class='sidebar-item'><a href='blogs/{$page_url}.php'>$page_url</a></div>";
    }
}
?>
