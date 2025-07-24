    <?php require_once __DIR__ . '/../template/navbar.php'; ?>

    <!-- inicio codigo -->

    <h1>Listando Jogadores</h1>

    <ul>
        <?php foreach ($pontuador as $pontuador): ?>
            <li>
                <?= htmlspecialchars($pontuador['jogador']) ?> - <?= htmlspecialchars($pontuador['id_time']) ?>
            </li>
        <?php endforeach ?>
    </ul>

    <!-- inicio codigo -->