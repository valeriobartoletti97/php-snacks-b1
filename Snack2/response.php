<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 2</title>
</head>
<body>
    <main>
        <h1 class="text-center my-3">
            <?php
                if((strlen($name) > 3) && (str_contains($email, "@")) && (str_contains($email, ".")) && (is_numeric($age))) {
                    echo "Accesso riuscito!";
                }else {
                    echo "Accesso negato!";
                }
            ?>
        </h1>
    </main>
</body>
</html>