<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
</body>
<div style="">
    <?php
    session_start();
    if (isset($_SESSION['id'])) {
      $id = $_SESSION['id'];
      echo "olá $id";
       } else{
        echo "<script>alert('Usuário precisar logar'); history.back();</script>";
       }

    ?>
<div>
    <div class="container text-center text-light" style="margin: 10%; border: 10px solid; padding: 20px; margin-left: 250px;">
      <h1> Seja bem vindo ao sistema</h1>  
      <p>Escolha uma opção para lançar</p>
  </div style='display : flex, flex-direction: colum; align-items: center; gap: 20px;'>
    <a href="categoria.html" htype="button" class="btn btn-success" style="margin-left: 200px; width: 700px;">Cadastrar Categoria</a>
    <a href="lançamento.html" type="button" class="btn btn-danger" style=" width: 700px;">Lançamento</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>