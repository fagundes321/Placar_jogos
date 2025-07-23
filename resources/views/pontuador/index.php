<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Jogadores</title>
</head>
<body>
    <?php require_once __DIR__ . '/../template/navbar.php';?>
    <h1>Listando Jogadores</h1>

    <ul>
        <?php foreach ($pontuador as $pontuador):?>
            <li>
                <?=  htmlspecialchars($pontuador['jogador']) ?> - <?= htmlspecialchars($pontuador['id_time'])?>
            </li>
        <?php endforeach?>
    </ul>
</body>
</html>