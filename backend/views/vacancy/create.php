<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Vacancy */

$this->title = 'Добавить вансию';
$this->params['breadcrumbs'][] = ['label' => 'Вакансии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vacancy-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
