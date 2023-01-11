<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pw Gen</title>
  
</head>
<body>
  <?php 
    session_start();
    
    include_once __DIR__ . "/logic/function.php";

  ?>
    <section>
      <form method="get">
        <label for="pwlength">Password Length</label>
        <input type="number" name="pwlength" id="pwlength">
        <input type="submit" value="Gen">

        <?php
          echo getRandomNum();
        ?>

      </form>
    </section>
  
</body>
</html>