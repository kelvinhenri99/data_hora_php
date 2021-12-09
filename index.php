<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Kelvin Henrique</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="rodape">DATA E HORA ATUAL (HORÁRIO SERVIDOR)</div>
        <div class="conteudo">
            <p>
                <?php
                    $timezone = new DateTimeZone('America/Sao_Paulo');
                    $agora = new DateTime('now', $timezone);
                    $agora = date('d/m/Y H:i');
                    echo $agora;
                ?>
            </p>
            <a href="index.php">ATUALIZAR RELÓGIO</a>
        </div>
    <div class="rodape">Kelvin Henrique Ferreira - 2021 | Todos os direitos reservados</div>
</body>
</html>