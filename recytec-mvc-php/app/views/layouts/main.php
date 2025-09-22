<?php
/** @var string $content */
/** @var string|null $pageTitle */
/** @var string|null $metaDescription */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Recytec') ?></title>
    <?php if (!empty($metaDescription)): ?>
        <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= rtrim(BASE_URL, '/') ?>/assets/css/style.css">
</head>
<body>
    <?php include __DIR__ . '/../partials/nav.php'; ?>
    <main>
        <?= $content ?>
    </main>
    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
