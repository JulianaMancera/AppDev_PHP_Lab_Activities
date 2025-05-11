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
    <!-- Bootstrap 5 CSS (for navbar functionality) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter and Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Tailwind configuration for the violet theme */
        .custom-shadow {
            box-shadow: 0 4px 15px rgba(109, 32, 119, 0.4);
        }
        .custom-shadow-hover {
            box-shadow: 0 6px 20px rgba(109, 32, 119, 0.6);
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#2a1b3d] to-[#3c2f5c] text-[#e0d0ff] font-['Inter'] min-h-screen flex flex-col justify-center items-center m-0">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed top-0 w-full z-[1000] bg-[#3c2f5c] p-4">
        <div class="container-fluid">
            <a class="navbar-brand text-[#e0d0ff] font-medium text-2xl" href="landing.php">PHP Activities</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-[#c8b6ff] font-medium ml-4 hover:text-[#e0d0ff] transition-colors duration-300" href="landing.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-[#c8b6ff] font-medium ml-4 hover:text-[#e0d0ff] transition-colors duration-300" href="me.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-[#c8b6ff] font-medium ml-4 hover:text-[#e0d0ff] transition-colors duration-300 active:text-[#e0d0ff]" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-[800px] p-4 mt-16 flex-1 flex flex-col items-center justify-center h-[calc(100vh-120px)] text-center">
        <h1 class="text-[#e0d0ff] font-bold text-6xl mb-6 shadow-[0_2px_4px_rgba(0,0,0,0.3)] hover:scale-105 transition-transform duration-300">Welcome to <?php echo $site_name; ?></h1>
        <p class="text-[#c8b6ff] text-xl mb-10 leading-8 max-w-[800px]">Explore a collection of PHP lab activities designed to enhance your programming skills. Dive into interactive challenges and projects with a minimalist violet-themed interface.</p>
        <a href="me.php" class="bg-[#6d2077] border-none rounded-lg py-4 px-12 font-bold text-lg uppercase tracking-wide transition-all duration-300 custom-shadow hover:bg-[#8b3a96] hover:custom-shadow-hover hover:-translate-y-0.5">Enter Dashboard</a>
    </main>

    <!-- Footer -->
    <footer class="bg-[#3c2f5c] text-[#c8b6ff] p-4 text-center w-full shadow-[0_-2px_10px_rgba(0,0,0,0.2)]">
        <p>© <?php echo $current_year; ?> <?php echo $site_name; ?> Compilation</p>
    </footer>

    <!-- Bootstrap 5 JS and Popper.js (Deferred) -->
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>