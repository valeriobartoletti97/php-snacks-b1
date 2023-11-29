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
        <div class="container">
            <h1 class="my-3 text-center">Hello!</h1>
            <form action="response.php" method="GET">
            <div class="my-3 text-center">
                <input type="text" class="form-control" id="name" name="name" placeholder="Write your name">
            </div>
            <div class="mb-3 text-center">
                <input type="email" class="form-control" id="email" name="email" placeholder="Write your email">
            </div>
            <div class="mb-3 text-center">
                <input type="text" class="form-control" id="age" name="age" placeholder="Write your age">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </main>
</body>
</html>