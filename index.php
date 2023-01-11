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


    include_once __DIR__ . "/logic/function.php";
    
    if(isset($_GET['pwlength'])){
      // Recupero lunghezza pw
      $passwordLenght = (int) $_GET['pwlength'];
      
      // Creo la pw casuale tramite la funzione in logic/function.php
      $password = getRandomNum($passwordLenght);
      
      // Salvo la pw nella sessione
      $_SESSION['password'] = $password;
      
      header('Location:password_manager.php');
      exit();

    }
  ?>
  <section class="container d-flex flex-column align-items-center mt-5 p-4 bg-dark text-white rounded-3">
    <h1 class="fw-bold">Password Generator</h1>
    <form method="get" class="d-flex flex-column align-items-center gap-3">
      <label for="pwlength">Password Length</label>
      <input type="number" max="500" name="pwlength" id="pwlength" placeholder="select password length">
      <input type="submit" value="Gen">
      
      

    </form>
  </section>
  
</body>
</html>