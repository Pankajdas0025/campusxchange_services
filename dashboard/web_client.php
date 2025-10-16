 <?php
include "../src/conn.php";
include "../components/IP_restriction.php";
include "../src/config.php";

// Handle verification update
if (isset($_POST['update_verification'])) {
    $clientId = intval($_POST['webclient_id']);
    $newStatus = $_POST['verification'] == '1' ? 1 : 0;
    $conn->query("UPDATE web_client SET Verification='$newStatus' WHERE Id='$clientId'");
    header("Location: " . $_SERVER['PHP_SELF']); // Refresh page to show updated status
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CampusXchange</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
                    <li class="nav-item">   <a class="nav-link" href="verified-intern">verified_intern</a> </li>
                    <li class="nav-item"><a class="nav-link" href="applied-intern">applied_intern</a></li>
                    <li class="nav-item"><a class="nav-link" href="clients">web_client</a></li>
                    <li class="nav-item"><a class="nav-link" href="notes">Notes</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>

            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h2>Dashboard Overview</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-header">Intern Applications</div>
                            <div class="card-body">
                                <h5 class="card-title" id="total-applications"> <?php echo $internCount; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Verified Interns</div>
                            <div class="card-body">
                                <h5 class="card-title" id="total-verified-interns"> <?php echo $verifiedCount; ?></h5>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-header">Total webclients</div>
                            <div class="card-body">
                                <h5 class="card-title" id="total-applications"> <?php echo $webclientCount; ?></h5>
                            </div>
                        </div>
                    </div>
                       <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Total Notes</div>
                            <div class="card-body">
                                <h5 class="card-title" id="total-applications"> <?php echo $notesCount; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>

                  <h3>Our webclients</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Choice</th>
                            <th>Plan</th>
                            <th>Date</th>
                            <th>Verification</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="applications-table-body">
                        <?php
                                $result = $conn->query("SELECT * FROM web_client WHERE Verification='0'");
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>{$row['Id']}</td>
                                            <td>{$row['Name']}</td>
                                            <td>{$row['Mobile']}</td>
                                            <td>{$row['Email']}</td>
                                            <td>{$row['Address']}</td>
                                            <td>{$row['Choice']}</td>
                                            <td>{$row['Plan']}</td>
                                            <td>{$row['Date']}</td>
                                            <td>{$row['Verification']}</td>

                                <td>
                                    <form method='POST' style='display:inline-block'>
                                        <input type='hidden' name='webclient_id' value='{$row['Id']}'>
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

    <script src="script.js"></script>
</body>
</html>