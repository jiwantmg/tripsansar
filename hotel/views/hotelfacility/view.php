<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hotel Facilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="main-content">
    <section class="wrapper site-min-height">

        <div class="hotel-facility-view">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id, 'hotel_hotel_id' => $model->hotel_hotel_id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id, 'hotel_hotel_id' => $model->hotel_hotel_id], [
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
                    'facility',
                    'description',
                    'note',
                    'date_created',
                    'date_updated',
                    'date_deleted',
                    'hotel_hotel_id',
                ],
            ]) ?>

        </div>

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

