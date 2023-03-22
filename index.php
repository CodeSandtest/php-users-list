<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
    <link id="theme-stylesheet" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .toggle-theme {
            position: fixed;
            top: 10px;
            right: 10px;
            width: 48px;
            height: 48px;
            border: none;
            background-color: #f8f9fa;
            color: #343a40;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <button id="toggle-theme" class="toggle-theme" title="Toggle Dark Mode">&#x1F310;</button>
    <div class="container">
        <h1 class="text-center">PHP Demo</h1>
        <?php require_once __DIR__ . '/Person.php'; ?>
        <div class="row">
            <?php
            $person1 = new Person("John Doe", "Frontend Developer");
            $person1->display();

            $person2 = new Person("Jane Smith", "Backend Developer");
            $person2->display();

            $person3 = new Person("Alice Brown", "Full Stack Developer");
            $person3->display();
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            const themeStylesheet = document.getElementById('theme-stylesheet');
            const currentTheme = themeStylesheet.getAttribute('href');
            if (currentTheme === 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') {
                themeStylesheet.setAttribute('href', './dark-theme.css');
            } else {
                themeStylesheet.setAttribute('href', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
            }
        });
    </script>
</body>

</html>