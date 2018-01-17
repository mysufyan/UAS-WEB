<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Beli */

$this->title = $model->nofaktur;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Stok Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beli-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
