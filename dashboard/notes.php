<?php
include "../src/conn.php";
include "../components/IP_restriction.php";


// Handle form submission for new verified intern
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_intern'])) {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    $note_link = $conn->real_escape_string($_POST['note_link']);
    $created_at = $conn->real_escape_string($_POST['created_at']);


    $insert = $conn->query("INSERT INTO notes (title, content, noteLink, created_at)
                            VALUES ('$title', '$content', '$note_link', '$created_at')");

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
                <h3>Add Notes</h3>
                <?php if(isset($success_message)) { echo "<div class='alert alert-success'>$success_message</div>"; header("Location: notes.php"); } ?>
                <?php if(isset($error_message)) { echo "<div class='alert alert-danger'>$error_message</div>"; header("Location: notes.php");} ?>
                <form method="POST" class="mb-4">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Contenet</label>
                            <input type="text" name="content" class="form-control" required>
                        </div>

                    </div>
                    <div class="form-row">
                          <div class="form-group col-md-4">
                            <label>Note-Link</label>
                            <input type="text" name="note_link" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Created at</label>
                            <input type="text" name="created_at" class="form-control" required>
                        </div>

                    </div>
                    <button type="submit" name="add_intern" class="btn btn-primary">Add Intern</button>
                </form>

                <h3>Notes</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>contenet</th>
                            <th>note_link</th>
                            <th>created_at</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM notes");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['title']}</td>
                                    <td>{$row['content']}</td>
                                    <td>{$row['noteLink']}</td>
                                    <td>{$row['created_at']}</td>

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
