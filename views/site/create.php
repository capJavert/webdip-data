<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataUsers */

$this->title = 'Create Data Users';
$this->params['breadcrumbs'][] = ['label' => 'Data Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
