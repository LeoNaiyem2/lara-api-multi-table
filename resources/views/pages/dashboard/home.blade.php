<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }

        .sidebar a {
            color: #fff;
            padding: 15px;
            display: block;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            box-shadow: 0 0.15rem 0.75rem rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar p-3">
            <h4 class="text-white mb-4"><i class="fas fa-chart-line me-2"></i>Dashboard</h4>
            <a href="#"><i class="fas fa-home me-2"></i>Home</a>
            <a href="#"><i class="fas fa-user me-2"></i>Profile</a>
            <a href="#"><i class="fas fa-cog me-2"></i>Settings</a>
            <a href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
        </div>

        <!-- Main Content -->
        <div class="content flex-grow-1">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4 shadow-sm">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Welcome, Admin</span>
                </div>
            </nav>

            <!-- Dashboard Cards -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h5><i class="fas fa-users fa-2x mb-2 text-primary"></i></h5>
                        <h6>Total Users</h6>
                        <h3>1,024</h3>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h5><i class="fas fa-dollar-sign fa-2x mb-2 text-success"></i></h5>
                        <h6>Revenue</h6>
                        <h3>$12,500</h3>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center">
                        <h5><i class="fas fa-chart-line fa-2x mb-2 text-info"></i></h5>
                        <h6>Growth</h6>
                        <h3>+18%</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
