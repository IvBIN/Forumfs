<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<!--    <head>-->
<!--    -->
<!--        <title>--><?php //= $this->title ?><!--</title>-->
<!--        --><?php //$this->head() ?>
<!--    </head>-->
<!--    <body>-->
<!--    --><?php //$this->beginBody() ?>
<!--    -->
<!--    <header>-->
<!--        <div class="container">-->
<!--            <a href="./" class="logo">5pda</a>-->
<!--            <nav>-->
<!--                <ul>-->
<!--                    <li><a href="#" class="">Случайная тема</a></li>-->
<!--                    <li><a href="/user/login" class="">Войти</a></li>-->
<!--                    <li><a href="/user/registration" class="btn">Регистрация</a></li>-->
<!--                </ul>-->
<!--    -->
<!--            </nav>-->
<!--        </div>-->
<!--    </header>-->
<!--    <main>-->
<!--        <div class="container">-->
<!--            --><?php //= $content ?>
<!--        </div>-->
<!--    </main>-->
<!--    -->
<!--    <footer>-->
<!--        <div class="container">-->
<!--            ©5pda --><?php //= date("Y") ?>
<!--        </div>-->
<!--    </footer>-->
<!--    -->
<!--    -->
<!--    --><?php //$this->endBody() ?>
<!--    </body>-->
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <a href="/" class="logo">5pda</a>
        <nav>
            <ul>
                <li><a href="#">Случайная тема</a></li>
                <?php if (Yii::$app->user->isGuest): ?>
                <li><a href="/user/login">Войти</a></li>
                <li><a class="btn" href="/user/registration">Регистрация</a></li>
                <?php else: ?>
                    <?= '<li>' .
                    Html::beginForm(['user/logout']) .
                    Html::submitButton('Выход (' .Yii::$app->user->identity->login.')',
                    ['class' => 'btn']) .
                    Html::endForm() .
                    '</li>'
                    ?>

                <?php endif; ?>
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
        ©5pda <?= date('Y') ?>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
