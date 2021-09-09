<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VacancySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Вакансии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'id',
            'title',
            [
                'class' => 'kartik\grid\BooleanColumn',
                'attribute' => 'isPublish',
                'vAlign' => 'middle',
                'trueLabel' => 'Да',
                'falseLabel' => 'Нет'
            ],

            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'toolbar' => [
            [
                'content' =>
                    Html::a('<i class="fas fa-plus"></i>', ['create'], [
                        'class' => 'btn btn-success',
                        'title' => 'Добавить вакансию'
                    ]) . ' ' .
                    Html::a('<i class="fas fa-redo"></i>', ['index'], [
                        'class' => 'btn btn-outline-secondary',
                        'title' => 'Обновить таблицу',
                        'data-pjax' => 1,
                    ]),
                'options' => ['class' => 'btn-group mr-2']
            ],
            '{export}',
            '{toggleData}',
        ],
        'toggleDataContainer' => ['class' => 'btn-group'],
        'exportContainer' => ['class' => 'btn-group mr-2'],
        'responsive' => true,
        'panel' => [
            'heading' => '<h3 class="card-title">Список вакансий</h3>',
            'type' => 'default',
            'after' => false,

        ],
    ]); ?>


</div>
