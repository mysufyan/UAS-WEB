<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Beli */

$this->title = 'Update Beli: ' . $model->nofaktur;
$this->params['breadcrumbs'][] = ['label' => 'Belis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nofaktur, 'url' => ['view', 'id' => $model->nofaktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="beli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
