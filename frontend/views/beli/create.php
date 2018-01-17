<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Beli */

$this->title = 'Tambah Stok';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Stok Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
