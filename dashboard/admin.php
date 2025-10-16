<?php

include "../src/conn.php";
include "../components/IP_restriction.php";
include "../src/config.php";
$internDomains = $conn->query("SELECT Domain, COUNT(*) as count FROM applied_intern GROUP BY Domain")->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CampusXchange</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

<div class="dashboard">
        <div class="card2">
            <h2>Internship Domains</h2>
            <canvas id="domainChart"></canvas>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('domainChart').getContext('2d');
        const domainData = <?php echo json_encode($internDomains); ?>;
        const labels = domainData.map(domain => domain.Domain);
        const dataCounts = domainData.map(domain => domain.count);

        const domainChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Applications',
                    data: dataCounts,
                    backgroundColor: 'rgba(99, 102, 241, 0.5)',
                    borderColor: 'rgba(99, 102, 241, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

            </main>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>