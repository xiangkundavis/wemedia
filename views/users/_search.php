<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'openid') ?>

    <?= $form->field($model, 'fund') ?>

    <?= $form->field($model, 'nickname') ?>

    <?= $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'industry') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'hobbies') ?>

    <?php // echo $form->field($model, 'habits') ?>

    <?php // echo $form->field($model, 'residence') ?>

    <?php // echo $form->field($model, 'trip') ?>

    <?php // echo $form->field($model, 'educational') ?>

    <?php // echo $form->field($model, 'marital') ?>

    <?php // echo $form->field($model, 'auth_key') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
