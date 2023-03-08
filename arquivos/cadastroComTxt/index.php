<?php
// index.php
session_start();
require("./helpers.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php require './meta-head.php' ?>
  <title>Lista Nomes</title>
</head>

<body>
  <div class="container mt-4">
    <h1>Lista nomes</h1>
    <?php
    if (isset($_SESSION['alert-message'])) {
      echo '<div class="alert ' . $_SESSION['alert-type'] . '" role="alert">';
      echo $_SESSION['alert-message'];
      echo '</div>';

      unset($_SESSION['alert-message']);
      unset($_SESSION['alert-type']);
    }
    ?>
    <form action="./process-file.php" method="post" class="mb-4">
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="" class="form-control">
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
    </form>

    <hr />
    <h2>Nomes Registrados</h2>
    <?php
    // verifica se o arquivo existe, antes de tentar a leitura
    $names = file_exists('names.txt') ? file_get_contents('names.txt') : '';
    $names = clearEmptyLines($names);

    $names = $names ? explode("\n", $names) : $names;
    ?>

    <?php if (is_array($names) && count($names) >= 1) { ?>
      <ul>
        <?php foreach ($names as $name) { ?>
          <?php if ($name) { ?>
            <li><?php echo $name ?></li>
          <?php } ?>
        <?php } ?>
      </ul>
  </div>
<?php } else { ?>
  <div class="alert alert-info">
    Nenhuma informação encontrada.
  </div>
<?php } ?>
</body>

</html>