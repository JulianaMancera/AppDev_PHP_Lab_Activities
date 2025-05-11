<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities - Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Custom Violet Minimalist CSS -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #2a1b3d;
            color: #e0d0ff;
            font-family: 'Inter', sans-serif;
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
            max-width: 1000px;
            padding: 2rem 1rem;
            margin-top: 60px; /* Adjust for fixed navbar */
            flex: 1 0 auto;
        }
        .activity-section {
            margin-top: 2rem;
        }
        .card {
            background-color: #3c2f5c;
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding: 1rem;
            font-weight: 500;
            color: #e0d0ff;
        }
        .card-body {
            padding: 1rem;
        }
        .btn-primary {
            background-color: #6d2077;
            border: none;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: background-color 0.2s;
        }
        .btn-primary:hover {
            background-color: #8b3a96;
        }
        h1, h2, h3 {
            color: #e0d0ff;
            font-weight: 600;
        }
        .lead {
            color: #c8b6ff;
            font-size: 1.1rem;
        }
        .modal-content {
            background-color: #3c2f5c;
            color: #e0d0ff;
            border: none;
            border-radius: 8px;
        }
        .modal-header {
            background-color: transparent;
            border-bottom: none;
            padding: 1rem;
        }
        .modal-title {
            color: #e0d0ff;
            font-weight: 500;
        }
        .modal-body {
            padding: 1rem;
        }
        .modal-footer {
            border-top: none;
            padding: 1rem;
        }
        .btn-close {
            filter: invert(1);
        }
        .btn-secondary {
            background-color: #4a3b6b;
            border: none;
            border-radius: 4px;
        }
        .btn-secondary:hover {
            background-color: #5c4b8a;
        }
        pre {
            background-color: #4a3b6b;
            color: #e0d0ff;
            padding: 1rem;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        footer {
            background-color: #3c2f5c;
            color: #c8b6ff;
            padding: 1rem;
            text-align: center;
            flex-shrink: 0;
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
                        <a class="nav-link" href="landing.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="me.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Hero Section -->
        <section id="home" class="text-center my-4">
            <h1>PHP Activities Dashboard</h1>
            <p class="lead">A minimalist violet-themed collection of PHP lab activities. Click the buttons to explore each lab folder.</p>
        </section>

        <!-- Activities Section -->
        <section id="activities" class="activity-section">
            <h2 class="mb-3">My Lab Activities</h2>
            <div class="row">
                <?php
                $labs = [
                    'Lab 1' => ['VariableChallenge.php', 'VCwithDesign.php'],
                    'Lab 2' => ['challenge1.php', 'challenge2.php', 'challenge3.php'],
                    'Lab 3' => ['challenge1.php', 'challenge2.php', 'challenge3.php'],
                    'Lab 4' => ['challenge_lab4.php'],
                    'Lab 5' => ['challengelab5.php'],
                    'Lab 6' => ['challenge1.php', 'challenge2.php', 'challenge3.php'],
                    'Lab 7' => ['challenge1.php', 'challenge2.php'],
                    'Lab 8' => ['main.php', 'result.php']
                ];

                foreach ($labs as $labName => $files) {
                    $modalId = strtolower(str_replace(' ', '', $labName)) . 'Modal';
                    echo '<div class="col-md-3 mb-3">';
                    echo '<div class="card">';
                    echo '<div class="card-header">' . $labName . '</div>';
                    echo '<div class="card-body">';
                    echo '<button type="button" class="btn btn-primary activity-btn" data-bs-toggle="modal" data-bs-target="#' . $modalId . '">Explore</button>';
                    echo '</div></div></div>';

                    // Modal for each lab
                    echo '<div class="modal fade" id="' . $modalId . '" tabindex="-1" aria-labelledby="' . $modalId . 'Label" aria-hidden="true">';
                    echo '<div class="modal-dialog">';
                    echo '<div class="modal-content">';
                    echo '<div class="modal-header">';
                    echo '<h5 class="modal-title" id="' . $modalId . 'Label">' . $labName . ' Files</h5>';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                    echo '</div>';
                    echo '<div class="modal-body">';
                    if (empty($files)) {
                        echo '<p>No files available.</p>';
                    } else {
                        echo '<ul>';
                        foreach ($files as $file) {
                            $hasDesign = ($file === 'VCwithDesign.php') ? ' (with design)' : '';
                            echo '<li><a href="' . strtolower(str_replace(' ', '', $labName)) . '/' . $file . '" target="_blank">' . pathinfo($file, PATHINFO_FILENAME) . '</a>' . $hasDesign . '</li>';
                        }
                        echo '</ul>';
                    }
                    echo '</div>';
                    echo '<div class="modal-footer">';
                    echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
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