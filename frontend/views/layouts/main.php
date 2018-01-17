<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' =>'cek GUDANG BELAKANG',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Input',
            'items' => [
                 ['label' => 'Input Suplier', 'url' => 'http://localhost/advance/frontend/web/index.php?r=suplier%2Fcreate'],
                 '<li class="divider"></li>',
                 ['label' => 'Input Barang', 'url' => 'http://localhost/advance/frontend/web/index.php?r=barang%2Fcreate'],
                 '<li class="divider"></li>',
                 ['label' => 'Tambah Stok', 'url' => 'http://localhost/advance/frontend/web/index.php?r=beli%2Fcreate'],
                 '<li class="divider"></li>',
                 ['label' => 'Barang Keluar', 'url' => 'http://localhost/advance/frontend/web/index.php?r=jual%2Fcreate'],
                ]];
        $menuItems[] = ['label' => 'Data',
            'items' => [
                 ['label' => 'Data Suplier', 'url' => 'http://localhost/advance/frontend/web/index.php?r=suplier'],
                 '<li class="divider"></li>',
                 ['label' => 'Data Barang', 'url' => 'http://localhost/advance/frontend/web/index.php?r=barang'],
                  '<li class="divider"></li>',
                 ['label' => 'Data Barang Masuk', 'url' => 'http://localhost/advance/frontend/web/index.php?r=beli'],
                  '<li class="divider"></li>',
                 ['label' => 'Data Barang Keluar', 'url' => 'http://localhost/advance/frontend/web/index.php?r=jual'],
                ]];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';

    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>Hemat Waktu</h2>

                <p>
                dapat dengan mudah dalam memanage informasi stok barang yang tersedia di toko anda dengan waktu yang singkat
                </p>

                <p><a class="btn btn-default" href="http://localhost/advance/frontend/web/index.php?r=beli">Laporan Barang Masuk &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Lebih Interaktif</h2>

                <p>
                Anda dapat dengan mudah laporan tentang stok barang keluar dalam satu periode
                   
                </p>
                </br> 
                <p><a class="btn btn-default" href="http://localhost/advance/frontend/web/index.php?r=jual">Laporan Barang Keluar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Lebih Mudah</h2>

                <p>
                Anda dapat melihat suplier yang menyetok barang ke Toko Anda
                  
                </p>
                </br> 
                <p><a class="btn btn-default" href="http://localhost/advance/frontend/web/index.php?r=suplier">Laporan Suplier &raquo;</a></p>
            </div>
        </div>
    </div>
</footer>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Cek Gudang Belakang <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
