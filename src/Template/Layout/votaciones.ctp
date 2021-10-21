<?php $titulo = 'Miss Falcón 2021'; ?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Miss Falcón 2021">
    <title>
        <?= $titulo ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
 
    <?= $this->Html->css([
        'Votaciones/style.css',
        'Votaciones/style2.css',
        'generico.css'
    ]) ?>
    <?= $this->fetch('css') ?>
</head>
<body>

    <?= $this->fetch('content') ?>
    <?= $this->Flash->render() ?>

</body>
</html>
