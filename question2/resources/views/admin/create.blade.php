<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #ecf0f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            max-width: 500px;
            background: #ecf0f3;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
            text-align: center;
        }
        .brand-logo {
            height: 80px;
            width: 80px;
            background: url("{{ asset('img/logo.jpg') }}") no-repeat center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: auto;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
        }
        .brand-title {
            margin-top: 10px;
            font-weight: 900;
            font-size: 1.5rem;
            color: #1DA1F2;
        }
        input, select, button {
            border: none;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 10px;
            box-shadow: inset 4px 4px 6px #cbced1, inset -4px -4px 6px white;
            background: #ecf0f3;
            outline: none;
        }
        .form-group {
            margin-top: 10px;
        }
        button {
            color: white;
            background: #1DA1F2;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
            transition: 0.3s;
            margin-top: 15px;
        }
        button:hover {
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="brand-logo"></div>
        <div class="brand-title">Let the Battle Begin</div>
        <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 form-group">
                    <input type="text" name="name" placeholder="Player Name" required>
                </div>
                <div class="col-6 form-group">
                    <input type="text" name="university" placeholder="University">
                </div>
            </div>

            <div class="form-group">
                <select name="category" required>
                    <option value="">Select Category</option>
                    <option value="Batsman">Batsman</option>
                    <option value="Bowler">Bowler</option>
                    <option value="All-rounder">All-rounder</option>
                    <option value="Wicketkeeper">Wicketkeeper</option>
                </select>
            </div>

            <div class="row">
                <div class="col-6 form-group">
                    <input type="number" name="total_runs" placeholder="Total Runs" min="0">
                </div>
                <div class="col-6 form-group">
                    <input type="number" name="balls_faced" placeholder="Balls Faced" min="0">
                </div>
            </div>

            <div class="row">
                <div class="col-6 form-group">
                    <input type="number" name="innings_played" placeholder="Innings Played" min="0">
                </div>
                <div class="col-6 form-group">
                    <input type="number" name="wickets" placeholder="Wickets" min="0">
                </div>
            </div>

            <div class="row">
                <div class="col-6 form-group">
                    <input type="number" step="0.1" name="overs_bowled" placeholder="Overs Bowled" min="0">
                </div>
                <div class="col-6 form-group">
                    <input type="number" name="runs_conceded" placeholder="Runs Conceded" min="0">
                </div>
            </div>

            <!-- Add image upload input -->
            <div class="form-group">
                <input type="file" name="image" accept="image/*">
            </div>

            <button type="submit">Add Player</button>
        </form>
    </div>
</body>
</html>
