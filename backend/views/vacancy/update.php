<?php

/* @var $this yii\web\View */
/* @var $model common\models\Vacancy */

$this->title = 'Редактировать вакансию';
$this->params['breadcrumbs'][] = ['label' => 'Вакансии', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="vacancy-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
