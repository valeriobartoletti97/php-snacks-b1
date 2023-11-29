<?php 
$matches=[
    [
        "homeTeam" => "Atlanta Hawks",
        "awayTeam" => "Charlotte Hornets",
        "homePoints" => "97",
        "awayPoints" => "120"
    ],
    [
        "homeTeam" => "Golden State Warriors",
        "awayTeam" => "Boston Celtics",
        "homePoints" => "117",
        "awayPoints" => "105"
    ],
    [
        "homeTeam" => "Cleveland Cavaliers",
        "awayTeam" => "Chicago Bulls",
        "homePoints" => "105",
        "awayPoints" => "93"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 1</title>
</head>
<body>
    <main>
        <h1 class="text-uppercase text-center mt-2">Partite di oggi</h1>
        <div class="text-center my-4">
            <?php 
            foreach( $matches as $key => $value ){
            echo($value["homeTeam"]. " - ". $value["awayTeam"]. " | ". $value["homePoints"]. "-". $value["awayPoints"]. "<br>");
            }               
            ?>
        </div>
      
    </main>
</body>
</html>