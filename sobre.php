<?php
require_once 'conexao.php';

$conexao = new Conexao();
$pdo = $conexao->conectar();

$sql = "SELECT * FROM wiki_textos ORDER BY id ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$textos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>TGCF World FanPage</title>
        <link rel="stylesheet" href="css/sobre.css">
    </head>

    <body>

        <?php include "pages/header.php"?>

        <div id="xieHistoria">
            <?php if (isset($textos[0])) echo $textos[0]['conteudo']; ?>
        </div>

        <div id="historiaLivroAtual">
            <?php if (isset($textos[1])) echo $textos[1]['conteudo']; ?>
        </div>

        <?php include "pages/footer.php"?>

    </body>

    <script>
        
    </script>

</html>