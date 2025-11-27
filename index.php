<?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "Loueny";
    $bio = "Loira e maromba";
    $imagem = "https://i.pinimg.com/1200x/62/0c/1c/620c1ca9e53342b5d0c69ed2847fa004.jpg";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links"></div>
    </div>
</body>
</html>