<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\Place;
use backend\models\Hotel;

/* @var $this yii\web\View */
/* @var $model backend\models\PlaceHotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="place-hotel-form">

    <?php $form = ActiveForm::begin(); ?>

       <?php
     			echo $form->field($model, 'place_place_id')->widget(Select2::classname(), [
        			'data' => ArrayHelper::map(Place::find()->all(),'place_id','placetitle'),
        			'language' => 'en',
        			'options' => ['placeholder' => 'Select a Hotel ...'],
        			'pluginOptions' => [
            	'allowClear' => true
        					],
      				]);
      ?>

     <?php
     			echo $form->field($model, 'hotel_hotel_id')->widget(Select2::classname(), [
        			'data' => ArrayHelper::map(Hotel::find()->all(),'hotel_id','hotelname'),
        			'language' => 'en',
        			'options' => ['placeholder' => 'Select a Hotel ...'],
        			'pluginOptions' => [
            	'allowClear' => true
        					],
      				]);
      ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
