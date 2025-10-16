<?php
include "../src/conn.php";
include "../components/IP_restriction.php";

// Handle verification update
if (isset($_POST['update_verification'])) {
    $internId = intval($_POST['intern_id']);
    $newStatus = $_POST['verification'] == '1' ? 1 : 0;
    $conn->query("UPDATE applied_intern SET Verification='$newStatus' WHERE id='$internId'");
    header("Location: " . $_SERVER['PHP_SELF']); // Refresh page to show updated status
    exit;
}

// Fetch dashboard data
$internDomains = $conn->query("SELECT Domain, COUNT(*) as count FROM applied_intern GROUP BY Domain")->fetch_all(MYSQLI_ASSOC);
$internCount = $conn->query("SELECT COUNT(*) as total FROM applied_intern")->fetch_assoc()['total'];
$verifiedCount = $conn->query("SELECT COUNT(*) as total FROM verified_intern")->fetch_assoc()['total'];
$webclientCount = $conn->query("SELECT COUNT(*) as total FROM web_client")->fetch_assoc()['total'];
$notesCount = $conn->query("SELECT COUNT(*) as total FROM notes")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CampusXchange</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <header class="bg-primary text-white text-center py-3">
        <h1>CampusXchange Dashboard</h1>
    </header>
    <div class="row">
        <nav class="col-md-2 bg-light sidebar">
            <ul class="nav flex-column">
               <li class="nav-item"><a class="nav-link active" href="admin">Admin</a></li>
                    <li class="nav-item"><a class="nav-link active" href="admin">Admin</a></li>
                    <li class="nav-item">   <a class="nav-link" href="verified-intern">verified_intern</a> </li>
                    <li class="nav-item"><a class="nav-link" href="applied-intern">applied_intern</a></li>
                    <li class="nav-item"><a class="nav-link" href="clients">web_client</a></li>
                    <li class="nav-item"><a class="nav-link" href="notes">Notes</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h2>Dashboard Overview</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Intern Applications</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $internCount; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Verified Interns</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $verifiedCount; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Total Web Clients</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $webclientCount; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Total Notes</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $notesCount; ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <h3>Recent Applications</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Domain</th>
                        <th>Verification</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM applied_intern WHERE Verification='0'");
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['Name']}</td>
                                <td>{$row['Email']}</td>
                                <td>{$row['Domain']}</td>
                                <td>{$row['Verification']}</td>
                                <td>
                                    <form method='POST' style='display:inline-block'>
                                        <input type='hidden' name='intern_id' value='{$row['id']}'>
                                        <select name='verification' class='form-control form-control-sm' style='width:70px; display:inline-block'>
                                            <option value='1' ".($row['Verification']==1?'selected':'').">1</option>
                                            <option value='0' ".($row['Verification']==0?'selected':'').">0</option>
                                        </select>
                                        <button type='submit' name='update_verification' class='btn btn-sm btn-primary'>Update</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</div>
</body>
</html>
