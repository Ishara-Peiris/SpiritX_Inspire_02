<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Stats</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #statsChart {
            max-width: 800px;
            height: 400px;
        }
    </style>
</head>
<body>
    <h2>Player Statistics</h2>
    <canvas id="statsChart"></canvas>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("/player-stats")
                .then(response => response.json())
                .then(data => {
                    console.log("Data received:", data);

                    if (!data) {
                        console.error("No data found!");
                        return;
                    }

                    const ctx = document.getElementById('statsChart').getContext('2d');

                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                                'Overall Runs', 
                                'Overall Wickets', 
                                data.highestRunScorer.name || 'N/A', 
                                data.highestWicketTaker.name || 'N/A'
                            ],
                            datasets: [{
                                label: 'Player Stats',
                                data: [
                                    data.overallRuns, 
                                    data.overallWickets, 
                                    data.highestRunScorer.runs || 0, 
                                    data.highestWicketTaker.wickets || 0
                                ],
                                backgroundColor: ['#4CAF50', '#FF5733', '#3498DB', '#FFC107'],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(error => console.error("Error fetching stats:", error));
        });
    </script>
</body>
</html>
