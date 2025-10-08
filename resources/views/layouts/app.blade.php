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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }
        
        main {
            flex: 1 0 auto;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <main class="py-4">
    @yield('content') 
    </main>
    
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-VpcrpYcF1Y3hB6NNxmXcS59fDVZLE5AA5SNDz0xhy9GkcIds1kleN7Nj6m1teHz" 
            crossorigin="anonymous"></script>
</body>
</html>