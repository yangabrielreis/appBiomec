<?php
  include("Pessoa.php");
  session_start();
  include("header.html");
?>

<style>
  .index-h1 {
    color: black;
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
  <h1 class="index-h1">Home Page</h1>
</body>
</html>

<?php
  include("footer.html");
?>