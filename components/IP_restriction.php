<?php
include "../src/conn.php";
session_start();

// Simple session-based protection
if (empty($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Not logged in
    header('Location: login.php');
    exit;
}

// Optional: You can also check admin id/username existence in DB if need



$internDomains = $conn->query("SELECT Domain, COUNT(*) as count FROM applied_intern GROUP BY Domain")->fetch_all(MYSQLI_ASSOC);
$internCount = $conn->query("SELECT COUNT(*) as total FROM applied_intern")->fetch_assoc()['total'];
$verifiedCount = $conn->query("SELECT COUNT(*) as total FROM verified_intern")->fetch_assoc()['total'];
$webclientCount = $conn->query("SELECT COUNT(*) as total FROM web_client")->fetch_assoc()['total'];
$notesCount = $conn->query("SELECT COUNT(*) as total FROM notes")->fetch_assoc()['total'];



// Simple IP allow list that works for localhost (IPv4/IPv6) and real public IPs
$allowed_ips =
[
    "103.183.227.183", // your real public IP (replace)
    "14.139.238.134",
    "127.0.0.1",       // localhost IPv4 (for local testing)
    "::1"              // localhost IPv6 (your ::1 output)
];

// Detect client IP (basic)
$client_ip = $_SERVER['REMOTE_ADDR'];

// If behind proxy (optional), prefer X-Forwarded-For first IP
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $client_ip = trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
}

// Normalize and check
$client_ip = trim($client_ip);

if (!in_array($client_ip, $allowed_ips)) {
    header("HTTP/1.1 403 Forbidden");
    die("<h2 style='color:red; text-align:center; margin-top:20%;'>Access Denied</h2>
         <p style='text-align:center;'>Your IP ($client_ip) is not authorized.</p>");
}

?>