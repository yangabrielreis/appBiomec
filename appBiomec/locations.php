<?php
  include("Pessoa.php");
  session_start();
  include('header.html');
?>

<style>

  .locations-h1 {
    font-weight: bold;
    font-family: Arial, sans-serif;
    text-rendering: optimizeLegibility;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visualizar</title>
</head>
<body>
  <h1 class="locations-h1">
    Dados: <br> <br>
    <?php
    $pessoa1 = new Pessoa($_SESSION['nome'], $_SESSION['nascimento'], $_SESSION['altura'], $_SESSION['peso']);
    foreach ($pessoa1 as $key => $value) {
      echo $key . ": " . $value . "<br>";
    }
    ?>
    <form action="locations.php" method="post">
      <br><br>
      <input type="submit" name="logout" value="Apagar">
    </form>
  </h1>
</body>
</html>

<?php
  if(isset($_POST["logout"])){
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: index.php");
  }
  include('footer.html');
?>