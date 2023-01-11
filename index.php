<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pw Gen</title>
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
  <?php 
    session_start();
    
    include_once __DIR__ . "/logic/function.php";
    
    ?>
    <section class="container d-flex justify-content-center mt-5 p-4 bg-dark text-white rounded-3">
      <form method="get" class="d-flex flex-column align-items-center gap-3">
        <label for="pwlength">Password Length</label>
        <input type="number" name="pwlength" id="pwlength" placeholder="select password length">
        <input type="submit" value="Gen">
        
        <?php
          echo getRandomNum();
        ?>

      </form>
    </section>
  
</body>
</html>