<?php
include "../src/conn.php";
include "../components/IP_restriction.php";


// Handle form submission for new verified intern
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_intern'])) {
    $name = $conn->real_escape_string($_POST['Name']);
    $domain = $conn->real_escape_string($_POST['Domain']);
    $duration = $conn->real_escape_string($_POST['Duration']);
    $intern_id = $conn->real_escape_string($_POST['Intern_ID']);
    $college = $conn->real_escape_string($_POST['College']);
    $project_link = $conn->real_escape_string($_POST['Project_Link']);

    $insert = $conn->query("INSERT INTO verified_intern (Name, Domain, Duration, Intern_ID, College, Project_Link)
                            VALUES ('$name', '$domain', '$duration', '$intern_id', '$college', '$project_link')");

    if ($insert) {
        $success_message = "Verified intern added successfully!";
    } else {
        $error_message = "Error: " . $conn->error;
    }
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

                <!-- Add New Verified Intern Section -->
                <h3>Add New Verified Intern</h3>
                <?php if(isset($success_message)) { echo "<div class='alert alert-success'>$success_message</div>"; header("Location: verified_intern.php"); } ?>
                <?php if(isset($error_message)) { echo "<div class='alert alert-danger'>$error_message</div>"; header("Location: verified_intern.php");} ?>
                <form method="POST" class="mb-4">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Domain</label>
                            <input type="text" name="Domain" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Duration</label>
                            <input type="text" name="Duration" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Intern ID</label>
                            <input type="text" name="Intern_ID" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>College</label>
                            <input type="text" name="College" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Project Link</label>
                            <input type="url" name="Project_Link" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="add_intern" class="btn btn-primary">Add Intern</button>
                </form>

                <h3>Verified Interns</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Domain</th>
                            <th>Duration</th>
                            <th>Intern_ID</th>
                            <th>College</th>
                            <th>Project_Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM verified_intern");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['Name']}</td>
                                    <td>{$row['Domain']}</td>
                                    <td>{$row['Duration']}</td>
                                    <td>{$row['Intern_ID']}</td>
                                    <td>{$row['College']}</td>
                                    <td>{$row['Project_Link']}</td>
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
