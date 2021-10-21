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
        /*'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'*/'Votacion/normalize.min.css',
        /*'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'*/'Votacion/swiper.min.css',
        'Votacion/style.css',
        'Votacion/estrellas.css',
        'fontawesome-all.min.css'
    ]) ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script([
       /* 'https://kit.fontawesome.com/42d5adcbca.js'*/ 'Votacion/42d5adcbca.js'
    ]) ?>
    <?= $this->fetch('script') ?>

</head>
<body>

    <?= $this->fetch('content') ?>   
    <?= $this->Flash->render() ?>

    <?= $this->Html->script([
        /*'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' */'Votacion/jquery.min.js', 
        /*'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'*/ 'Votacion/swiper.min.js',
        'Votacion/script.js'
    ]) ?>
    <?= $this->fetch('script') ?>
</body>
</html>
