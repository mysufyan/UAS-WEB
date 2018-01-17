<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jual */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jual-form">
	<div class="row">
        <div class="col-lg-5">

	    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'nofaktur')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'tgl')->textInput() ?>

	    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'qty')->textInput() ?>

	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Edit', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
