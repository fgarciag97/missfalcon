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
    <?= $this->Html->css(['Preview/style.css']) ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
   
    <?= $this->Html->script([
        'Preview/jquery.min.js', 
        'Preview/hammer.min.js', 
        'Preview/script.js',
        'https://kit.fontawesome.com/42d5adcbca.js'/*'Preview/42d5adcbca.js'*/
    ]) ?>
    <?= $this->fetch('script') ?>
</body>
</html>
