<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jual */

$this->title = 'Tambah Barang Keluar';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Barang Keluar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
