<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jual */

$this->title = 'Update Jual: ' . $model->nofaktur;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Barang Keluar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nofaktur, 'url' => ['view', 'id' => $model->nofaktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
