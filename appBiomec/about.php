<?php
  include("Pessoa.php");
  session_start();
  include('header.html');
?>

<style>

  .about-h1 {
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
  <title>Document</title>
</head>
<body>
  <h1 class="about-h1">
    Preenchimento de Dados.<br>
    <br>
    <form action="about.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome"><br><br>

      <label for="nascimento">Nascimento:</label><br><br>
      <input type="date" id="nascimento" name="nascimento"><br><br>

      <label for="altura">Altura:</label>
      <input type="number" id="altura" name="altura"><br><br>

      <label for="peso">Peso:</label>
      <input type="number" id="peso" name="peso"><br><br>

      <input type="submit" name="confirmar" value="Confirmar">
    </form>
  </h1>
</body>
</html>

<?php 
  if(isset($_POST['confirmar'])) {
    if(empty($_POST['nome']) || empty($_POST['nascimento']) || empty($_POST['altura']) || empty($_POST['peso'])) {
      echo "<script>alert('Preencha todos os campos!')</script>";
    } else {
      $_SESSION['nome'] = $_POST['nome'];
      $_SESSION['nascimento'] = $_POST['nascimento'];
      $_SESSION['altura'] = $_POST['altura'];
      $_SESSION['peso'] = $_POST['peso'];
    }
  }
  include('footer.html');
?>