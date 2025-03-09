<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Create a New Team</h2>

        <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="team_name" class="form-label">Team Name</label>
                <input type="text" class="form-control" id="team_name" name="team_name" required>
                @error('team_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            

            <div class="mb-3">
                <label for="players" class="form-label">Select Players</label>
                <select multiple class="form-control" id="players" name="players[]">
                    @foreach($players as $player)
                        <option value="{{ $player->id }}">{{ $player->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">You can select up to 11 players for your team.</small>
                @error('players')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Create Team</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const maxPlayers = 11;
        const playerSelect = document.getElementById('players');

        playerSelect.addEventListener('change', function() {
            const selectedPlayers = playerSelect.selectedOptions.length;

            if (selectedPlayers > maxPlayers) {
                alert('You can only select up to 11 players.');
                playerSelect.options[selectedPlayers - 1].selected = false;
            }
        });
    </script>
</body>
</html>
