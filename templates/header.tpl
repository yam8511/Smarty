<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <?= foreach item=item1 from=$css ?>
        <link rel="stylesheet" type="text/css" href="css/<?= $item1 ?>">
    <?= /foreach ?>
    <?= foreach item=item1 from=$linkcss ?>
    <link rel="stylesheet" type="text/css" href="<?= $item1 ?>">
    <?= /foreach ?>
</head>
<body>

