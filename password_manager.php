<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Password</title>
</head>
<body>
    <?php
        session_start();
        include_once __DIR__ . "/logic/function.php";
    ?>

    <h1><?php echo getRandomNum($passwordLenght, $characters, $randomString); ?></h1>
</body>
</html>