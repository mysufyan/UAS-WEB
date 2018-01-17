<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suplier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suplier-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kode',
            'nama',
            'alamat',
            'Perusahaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
