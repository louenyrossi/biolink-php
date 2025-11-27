<?php
    // --- DADOS DO PERFIL ---
    $nome = "Loueny";
    $bio = "Loira e maromba";
    $imagem = "https://i.pinimg.com/1200x/62/0c/1c/620c1ca9e53342b5d0c69ed2847fa004.jpg";

     $links = [
        "Instagram" => "https://instagram.com/lou._.rossi",
        "WhatsApp"  => "https://wa.me/(17)996241799",
        "Meu Jogo Favorito" => "https://www.playpkxd.com/",
        "Musica do Momento" => "https://www.youtube.com/watch?v=TdrL3QxjyVw&list=RDTdrL3QxjyVw&start_radio=1"
    ];
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

        <div class="lista-links">
              <?php
            foreach ($links as $texto => $url) {
                $classe_extra = "";

                if ("$texto" == "Instagram") {
                    $classe_extra = "destaque";
                }

                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                        $texto
                      </a>";
            }
            ?>
        </div>

        <div class="area-contato">
            <a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
        </div>
        
    </div>
</body>
</html>