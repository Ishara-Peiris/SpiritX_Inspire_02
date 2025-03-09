<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricketers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .player-card {
            transition: transform 0.3s ease-in-out;
            border-radius: 12px;
            overflow: hidden;
        }

        .player-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .category-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #ff5733;
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .brand-logo {
            height: 80px;
            width: 80px;
            background: url("{{ asset('img/logo.jpg') }}") no-repeat center;
            background-size: cover;
            margin: auto;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h2 class="text-center mb-4 fw-bold">Players</h2>
    <div class="row justify-content-center">
        @foreach($players as $player)
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden player-card">
                
                <!-- Player Image -->
               

                <div class="card-body text-center">
                    
                    <!-- Logo -->
                    <div class="brand-logo"></div>

                    <h4 class="card-title fw-bold mt-3">{{ $player->name }}</h4>
                    <p class="text-muted">{{ $player->university ?? 'N/A' }}</p>

                    <!-- Player Stats -->
                    <div class="row text-center">
                        <div class="col-6">
                            <p class="mb-1"><strong>Total Runs</strong></p>
                            <p class="text-primary fw-bold">{{ $player->total_runs }}</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><strong>Wickets</strong></p>
                            <p class="text-danger fw-bold">{{ $player->wickets }}</p>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-6">
                            <p class="mb-1"><strong>Balls Faced</strong></p>
                            <p class="text-primary fw-bold">{{ $player->balls_faced }}</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><strong>Innings Played</strong></p>
                            <p class="text-danger fw-bold">{{ $player->innings_played }}</p>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-6">
                            <p class="mb-1"><strong>Overs Bowled</strong></p>
                            <p class="text-primary fw-bold">{{ $player->overs_bowled }}</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><strong>Runs Conceded</strong></p>
                            <p class="text-danger fw-bold">{{ $player->runs_conceded }}</p>
                        </div>
                    </div>

                    <!-- View Player Button -->
                    <a href="{{ route('player.view', $player->id) }}" class="btn btn-info w-100 mt-3">View Player</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
