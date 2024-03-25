<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <a href="./" class="logo">5pda</a>
        <nav>
            <ul>
                <li><a href="#" class="">Случайная тема</a></li>
                <li><a href="/user/login" class="">Войти</a></li>
                <li><a href="/user/registration" class="btn">Регистрация</a></li>
            </ul>

        </nav>
    </div>
</header>
<main>
    <div class="container">
        <?= $content ?>
    </div>
</main>

<footer>
    <div class="container">
        ©5pda <?= date("Y") ?>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
