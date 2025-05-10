<?php
    $title = 'Introduction to PHP';
    $author = 'By: John Doe';
    $body = 'PHP (Hypertext Preprocessor) is a widely used server-side scripting
                language that has revolutionized web development. With its simplicity,
                flexibility, and vast community support, PHP has become the backbone of
                countless dynamic websites and web applications.';
    $pageTitle = 'Brad\'s PHP Blog |' . $title;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?=$pageTitle?></title>


        <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #8e44ad, #c0392b);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        main {
            width: 50%;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            color: #333;
        }
        h1 {
            color: #8e44ad;
            font-size: 28px;
        }
        p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    </head>
    <body>
        <main>
            <h1><?=$title?></h1>
            <p><?=$author?></p>
            <p><?=$body?></p>
        </main>
    </body>
</html>