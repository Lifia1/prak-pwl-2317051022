<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9fEpRok6CYtnYmDr5pNlYt2bRjXh03MhJY6hW+ALEwIH" 
          crossorigin="anonymous">
</head>
<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-VpcrpYcF1Y3hB6NNxmXcS59fDVZLE5AA5SNDz0xhy9GkcIds1kleN7Nj6m1teHz" 
            crossorigin="anonymous"></script>
</body>
</html>