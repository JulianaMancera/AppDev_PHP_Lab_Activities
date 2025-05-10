<?php
// config.php (could be a separate file)
$site_name = "PHP Activities";
$current_year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore PHP lab activities to enhance your programming skills with a minimalist violet-themed interface.">
    <meta name="keywords" content="PHP, programming, lab activities, coding challenges">
    <meta name="author" content="PHP Activities Team">
    <!-- Open Graph for social media -->
    <meta property="og:title" content="<?php echo $site_name; ?> - Welcome">
    <meta property="og:description" content="Interactive PHP lab activities to boost your coding skills.">
    <meta property="og:type" content="website">
    <!-- Content Security Policy -->
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; style-src 'self' https://cdn.jsdelivr.net https://fonts.googleapis.com; font-src https://fonts.gstatic.com; script-src 'self' https://cdn.jsdelivr.net">
    <title><?php echo $site_name; ?> - Welcome</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <!-- Preload Google Fonts -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" as="style" onload="this.rel='stylesheet'">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Violet Minimalist CSS -->
    <style>
        :root {
            --primary-bg: #2a1b3d;
            --secondary-bg: #3c2f5c;
            --text-primary: #e0d0ff;
            --text-secondary: #c8b6ff;
            --accent: #6d2077;
            --accent-hover: #8b3a96;
        }

        body {
            background: linear-gradient(135deg, var(--primary-bg), var(--secondary-bg));
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .navbar {
            background-color: var(--secondary-bg);
            padding: 1rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            color: var(--text-primary);
            font-weight: 700;
            font-size: 1.8rem;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--text-secondary);
        }

        .navbar-nav .nav-link {
            color: var(--text-secondary);
            font-weight: 500;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: var(--text-primary);
        }

        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.75rem;
        }

        .navbar-toggler-icon {
            filter: invert(1);
            width: 1.5em;
            height: 1.5em;
        }

        main.container {
            max-width: 800px;
            text-align: center;
            padding: 6rem 1rem 2rem;
            flex: 1 0 auto;
        }

        h1 {
            color: var(--text-primary);
            font-weight: 700;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        h1:hover {
            transform: scale(1.05);
        }

        p.lead {
            color: var(--text-secondary);
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            line-height: 1.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            background-color: var(--accent);
            border: none;
            border-radius: 8px;
            padding: 1rem 2.5rem;
            font-weight: 700;
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(109, 32, 119, 0.4);
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            box-shadow: 0 6px 20px rgba(109, 32, 119, 0.6);
            transform: translateY(-2px);
        }

        footer {
            background-color: var(--secondary-bg);
            color: var(--text-secondary);
            padding: 1rem;
            text-align: center;
            width: 100%;
            margin-top: auto;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 576px) {
            main.container {
                padding: 5rem 0.5rem 1rem;
            }

            h1 {
                font-size: 2.5rem;
            }

            p.lead {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><?php echo $site_name; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container">
        <h1>Welcome to <?php echo $site_name; ?></h1>
        <p class="lead">Explore a collection of PHP lab activities designed to enhance your programming skills. Dive into interactive challenges and projects with a minimalist violet-themed interface.</p>
        <a href="dashboard.php" class="btn btn-primary">Enter Dashboard</a>
    </main>

    <!-- Footer -->
    <footer>
        <p>© <?php echo $current_year; ?> <?php echo $site_name; ?> Compilation</p>
    </footer>

    <!-- Bootstrap 5 JS and Popper.js (Deferred) -->
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>