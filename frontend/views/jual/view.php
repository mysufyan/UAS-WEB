<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jual */

$this->title = $model->nofaktur;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Barang Keluar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jual-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['Edit', 'id' => $model->nofaktur], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['Hapus', 'id' => $model->nofaktur], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nofaktur',
            'tgl',
            'kode',
            'qty',
        ],
    ]) ?>

</div>
