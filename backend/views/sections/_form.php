<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Section;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Section */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pid')
        ->dropDownList(ArrayHelper::map(Section::find()->where(['pid'=>0])->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
