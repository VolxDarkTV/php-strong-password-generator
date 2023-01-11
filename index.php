<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pw Gen</title>
</head>
<body>
  <section>
    <form method="get">
      <label for="pwlength">Password Length</label>
      <input type="text" name="pwlength" id="pwlength">
      <input type="submit" value="Gen">

      <?php
        $password = $_GET['pwlength'] ?? false;

        // Lunghezza 
        $passwordLenght = "$password";
        // Tutti i possibili caratteri
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";
        // Random String
        $randomString = "";

        // Ciclo For
      for ($i = 0; $i < $passwordLenght; $i++){
        $randomString .= $characters[rand(0, (strlen($characters) - 1))];
      }
      echo 'RandomString: ' . $randomString;
        // Ulteriore Randomizzazione delle password, ma prima devo far generare qualcosa alla macchina
        // $passwordGen = str_shuffle($password);
        // echo $passwordGen;
      ?>

    </form>
  </section>
</body>
</html>