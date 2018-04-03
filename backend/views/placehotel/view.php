<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PlaceHotel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Place Hotels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="main-content">
    <section class="wrapper">
			
<div class="place-hotel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'place_place_id',
            'hotel_hotel_id',
        ],
    ]) ?>

</div>
    		
    </section>  
</section>

