<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DataUsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prezime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'korisnicko_ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dan')->textInput() ?>

    <?= $form->field($model, 'mjesec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'godina')->textInput() ?>

    <div class="form-group">
      <label>Spol</label>
    <?php
        echo Html::dropDownList('spol', $model, ['M'=>'Muško', 'F'=>'Žensko'], [
            'prompt' => 'Odaberi',
            'class' => 'form-control',
        ]);
    ?>
    </div>

    <div class="form-group">
      <label>Država</label>
    <?php
        echo Html::dropDownList('drzava', $model, ['HR'=>'Hrvatska', 'RS'=>'Srbija', 'BA'=>'BiH', 'SI'=>'Slovenija'], [
            'prompt' => 'Odaberi',
            'class' => 'form-control',
        ]);
    ?>
    </div>

    <?= $form->field($model, 'mobitel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokacija')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slika')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obavijesti')->checkBox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
