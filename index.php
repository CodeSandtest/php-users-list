<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Featured Users</h1>
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
</body>

</html>