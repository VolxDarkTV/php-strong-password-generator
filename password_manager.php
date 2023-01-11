<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Password</title>

    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        session_start();

        // Importo le funzioni
        include_once __DIR__ . "/logic/function.php";
        include_once __DIR__ . "/index.php";
        
        if (isset($_SESSION['password'])){
            $password = $_SESSION['password'];
            echo "<h1 class='container p-0 d-flex justify-content-center'> La tua password è: " . $password . "</h1>";
            unset($_SESSION['password']);
        } else{
            echo "<h1 class='container p-0 d-flex justify-content-center'> La tua password è: " . "Genera la tua PRIMA Password!!" . "</h1>";
        }

    ?>
<div class="container justify-content-center d-flex ">


</div>
</body>
</html>
<!-- indirizzo sul quale devo arrivare '/password_manager.php/?pwlength=...' -->