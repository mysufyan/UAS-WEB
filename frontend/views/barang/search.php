<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Barang */

$this->title = 'Temukan Barang';
$this->params['breadcrumbs'][] = ['label' => 'Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-search">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_search', [
        'model' => $model,
    ]) ?>

</div>