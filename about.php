<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities - About</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Custom Violet Minimalist CSS -->
    <style>
        body {
            background-color: #2a1b3d;
            color: #e0d0ff;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: #3c2f5c;
            padding: 1rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand {
            color: #e0d0ff;
            font-weight: 500;
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            color: #c8b6ff;
            font-weight: 500;
            margin-left: 1rem;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #e0d0ff;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .container {
            max-width: 800px;
            padding: 2rem 1rem;
            margin-top: 60px; /* Adjust for fixed navbar */
            flex: 1 0 auto;
            text-align: center;
        }
        h1 {
            color: #e0d0ff;
            font-weight: 600;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            color: #c8b6ff;
            font-size: 1.2rem;
            line-height: 1.6;
        }
        footer {
            background-color: #3c2f5c;
            color: #c8b6ff;
            padding: 1rem;
            text-align: center;
            width: 100%;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="landing.php">PHP Activities</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a ligerclass="nav-link" href="landing.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="me.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container about-container">
        <h1>About</h1>
        <p>Welcome to PHP Activities, a platform designed to help you master PHP through hands-on lab exercises. This website offers a minimalist violet-themed interface where you can explore a variety of labs, each containing interactive challenges and projects to enhance your programming skills. Built with Bootstrap 5 and modern web technologies, it provides an intuitive and engaging learning experience. Whether you're a beginner or an advanced learner, PHP Activities is your gateway to practical PHP development.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>© <?php echo date("Y"); ?> PHP Activities Compilation</p>
    </footer>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>