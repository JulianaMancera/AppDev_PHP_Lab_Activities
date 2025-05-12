<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities - Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter and Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
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
            margin: 0;
        }

        .navbar {
            background-color: var(--secondary-bg);
            padding: 1rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand {
            color: var(--text-primary);
            font-weight: 500;
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            color: var(--text-secondary);
            font-weight: 500;
            margin-left: 1rem;
            transition: color 0.3s ease;
            display: block;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: var(--text-primary);
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .navbar-collapse {
            justify-content: flex-end;
        }
        .container {
            max-width: 1000px;
            padding: 2rem 1rem;
            margin-top: 60px;
            flex: 1 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .activity-section {
            margin-top: 2rem;
            width: 100%;
        }
        .card {
            background: linear-gradient(to right, #8e44ad, #c0392b);
            border: none;
            border-radius: 12px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeIn 1s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.3);
        }
        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding: 1rem;
            font-weight: 500;
            color: #fff;
            text-align: center;
        }
        .card-body {
            padding: 1rem;
            text-align: center;
        }
        .btn-primary {
            background-color: var(--accent);
            border: none;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: background-color 0.2s;
            margin: 0.3rem;
        }
        .btn-primary:hover {
            background-color: var(--accent-hover);
        }
        h1 {
            color: var(--text-primary);
            font-weight: 600;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        .lead {
            color: var(--text-secondary);
            font-size: 1.1rem;
            text-align: center;
        }
        h2 {
            color: var(--text-primary);
        }
        .modal-content {
            background-color: var(--secondary-bg);
            color: var(--text-primary);
            border: none;
            border-radius: 8px;
        }
        .modal-header {
            background-color: transparent;
            border-bottom: none;
            padding: 1rem;
        }
        .modal-title {
            color: var(--text-primary);
            font-weight: 500;
        }
        .modal-body {
            padding: 1rem;
            font-family: 'Poppins', sans-serif;
        }
        .activity-buttons {
            margin-bottom: 1rem;
        }
        .instruction-container {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 1rem;
            color: #333;
        }
        .instruction-container h6 {
            color: #333;
            font-weight: 500;
        }
        .instruction-container p {
            margin: 0.5rem 0;
        }
        .output-container {
            padding: 15px;
            border-radius: 8px;
            background: #f1f1f1;
            color: #333;
            margin-bottom: 1rem;
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
            color: var(--text-primary);
            padding: 1rem;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        footer {
            background-color: var(--secondary-bg);
            color: var(--text-secondary);
            padding: 1rem;
            text-align: center;
            width: 100%;
            margin-top: auto;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 576px) {
            .container {
                padding: 5rem 0.5rem 1rem;
            }
            h1 {
                font-size: 2rem;
            }
            p.lead {
                font-size: 1rem;
            }
            .btn-primary {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }
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
                    'Lab 1' => [
                        'VariableChallenge.php' => ['file' => 'VariableChallenge.php'],
                        'VCwithDesign.php' => ['file' => 'VCwithDesign.php']
                    ],
                    'Lab 2' => [
                        'challenge1.php' => ['file' => 'challenge1.php'],
                        'challenge2.php' => ['file' => 'challenge2.php'],
                        'challenge3.php' => ['file' => 'challenge3.php']
                    ],
                    'Lab 3' => [
                        'challenge1.php' => ['file' => 'challenge1.php'],
                        'challenge2.php' => ['file' => 'challenge2.php'],
                        'challenge3.php' => ['file' => 'challenge3.php']
                    ],
                    'Lab 4' => [
                        'challenge_lab4.php' => ['file' => 'challenge_lab4.php']
                    ],
                    'Lab 5' => [
                        'challengelab5.php' => ['file' => 'challengelab5.php']
                    ],
                    'Lab 6' => [
                        'challenge1.php' => ['file' => 'challenge1.php'],
                        'challenge2.php' => ['file' => 'challenge2.php'],
                        'challenge3.php' => ['file' => 'challenge3.php']
                    ],
                    'Lab 7' => [
                        'challenge1.php' => ['file' => 'challenge1.php'],
                        'challenge2.php' => ['file' => 'challenge2.php']
                    ],
                    'Lab 8' => [
                        'main.php' => ['file' => 'main.php'],
                        'result.php' => ['file' => 'result.php']
                    ]
                ];

                foreach ($labs as $labName => $activities) {
                    $modalId = strtolower(str_replace(' ', '', $labName)) . 'Modal';
                    echo '<div class="col-md-3 mb-3">';
                    echo '<div class="card">';
                    echo '<div class="card-header">' . $labName . '</div>';
                    echo '<div class="card-body">';
                    echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#' . $modalId . '">Explore</button>';
                    echo '</div></div></div>';

                    // Modal for each lab
                    echo '<div class="modal fade" id="' . $modalId . '" tabindex="-1" aria-labelledby="' . $modalId . 'Label" aria-hidden="true">';
                    echo '<div class="modal-dialog modal-lg">';
                    echo '<div class="modal-content">';
                    echo '<div class="modal-header">';
                    echo '<h5 class="modal-title" id="' . $modalId . 'Label">' . $labName . ' Activities</h5>';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                    echo '</div>';
                    echo '<div class="modal-body">';
                    echo '<div class="activity-buttons">';
                    foreach ($activities as $activityName => $details) {
                        echo '<button type="button" class="btn btn-primary activity-btn" data-activity="' . $activityName . '">' . pathinfo($activityName, PATHINFO_FILENAME) . '</button>';
                    }
                    echo '</div>';
                    echo '<div class="instruction-container" id="' . $modalId . '-instruction"></div>';
                    echo '<div class="output-container" id="' . $modalId . '-output"></div>';
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.modal').forEach(modal => {
                const modalId = modal.id;
                const buttons = modal.querySelectorAll('.activity-btn');
                const instructionContainer = modal.querySelector('.instruction-container');
                const outputContainer = modal.querySelector('.output-container');

                buttons.forEach(button => {
                    button.addEventListener('click', function (e) {
                        e.preventDefault();
                        const activityName = button.getAttribute('data-activity');
                        const labName = modal.querySelector('.modal-title').textContent.replace(' Activities', '');

                        // Construct the file path
                        const filePath = `${labName.toLowerCase().replace(' ', '')}/${activityName}`;
                        
                        // Fetch the content dynamically
                        fetch(filePath)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('File not found');
                                }
                                return response.text();
                            })
                            .then(data => {
                                // Extract instruction from PHP comment block
                                let instructionText = '';
                                const instructionMatch = data.match(/\/\*\s*Instructions\s*([\s\S]*?)\*\//i);
                                if (instructionMatch) {
                                    instructionText = instructionMatch[1].trim().replace(/\s+/g, ' ');
                                } else {
                                    instructionText = `Placeholder: Create a PHP script related to ${pathinfo(activityName, 'filename')}. Replace this with the actual problem instruction.`;
                                }

                                // Extract output from <main> tags
                                let outputText = '';
                                const mainMatch = data.match(/<main>([\s\S]*?)<\/main>/i);
                                if (mainMatch) {
                                    outputText = mainMatch[1].trim();
                                } else {
                                    // If no <main> tags, use the entire content or a placeholder
                                    outputText = data.trim() || `Placeholder Output: This is a sample output for ${pathinfo(activityName, 'filename')}. Replace with actual output.`;
                                }

                                // Display formatted instruction
                                instructionContainer.innerHTML = `
                                    <h6>${pathinfo(activityName, 'filename')}</h6>
                                    <p>${instructionText}</p>
                                `;

                                // Display output
                                outputContainer.innerHTML = outputText;
                            })
                            .catch(error => {
                                // Fallback if fetch fails
                                instructionContainer.innerHTML = `
                                    <h6>${pathinfo(activityName, 'filename')}</h6>
                                    <p>Placeholder: Create a PHP script related to ${pathinfo(activityName, 'filename')}. Replace this with the actual problem instruction.</p>
                                `;
                                outputContainer.innerHTML = `Placeholder Output: This is a sample output for ${pathinfo(activityName, 'filename')}. Replace with actual output.`;
                            });
                    });
                });

                // Trigger the first button click to show initial content
                const firstButton = buttons[0];
                if (firstButton) {
                    firstButton.click();
                }
            });

            // Helper function to mimic PHP's pathinfo
            function pathinfo(path, opt) {
                const info = {
                    dirname: '',
                    basename: '',
                    extension: '',
                    filename: ''
                };
                const matches = path.match(/^(.*?)[\/\\]([^\/\\]+?)(?:\.(.*?))?$/);
                if (matches) {
                    info.dirname = matches[1];
                    info.basename = matches[2];
                    info.extension = matches[3] || '';
                    info.filename = info.basename.replace(new RegExp('\\' + info.extension + '$'), '');
                } else {
                    info.basename = path;
                    info.filename = path;
                }
                return opt ? info[opt] : info;
            }
        });
    </script>
</body>
</html>