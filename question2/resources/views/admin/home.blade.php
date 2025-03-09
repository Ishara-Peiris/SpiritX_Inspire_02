<x-app-layout>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        
        <!-- Include Bootstrap & Material Design Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

        <!-- Custom Styles -->
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f7fc;
            }
            .sidebar {
                width: 250px;
                height: 100vh;
                background-color: #2b3a4a;
                color: white;
                position: fixed;
                padding-top: 20px;
            }
            .sidebar a {
                color: white;
                text-decoration: none;
                padding: 10px 15px;
                display: block;
                transition: 0.3s;
            }
            .sidebar a:hover {
                background-color: #1e2a38;
            }
            .menu-title {
                font-size: 16px;
            }
            .content {
                margin-left: 260px;
                padding: 20px;
            }
        </style>
    </head>
    <body>

        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="sidebar-brand brand-logo-mini" href="index.html">
                </a>
            </div>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/index') }}">
                        <i class="mdi mdi-speedometer"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/play') }}">
                        <i class="mdi mdi-laptop"></i>
                        <span class="menu-title">Players</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/team') }}">
                        <i class="mdi mdi-playlist-play"></i>
                        <span class="menu-title">Team</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/player-stats') }}">
                        <i class="mdi mdi-chart-bar"></i>
                        <span class="menu-title">Stats</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <h2>Welcome to Admin Dashboard</h2>
            <p>Manage Players.</p>
        </div>

        <!-- Bootstrap & jQuery Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </body>
    </html>
</x-app-layout>
