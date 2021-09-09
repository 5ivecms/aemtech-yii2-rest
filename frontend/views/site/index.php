<?php

/* @var $this yii\web\View */
/* @var $vacancies common\models\Vacancy[] */

use yii\helpers\Url;

$this->title = 'Вакансии';

?>
<div class="site-index">
    <h1 class="mb-4">Новые вакансии</h1>
    <?php foreach ($vacancies as $vacancy): ?>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title"><?= $vacancy['title'] ?></h5>
                <p class="card-text"><?= $vacancy['text'] ?></p>
                <a href="<?= Url::to(['vacancy/view/', 'id' => $vacancy['id']]) ?>" class="btn btn-primary">Читать</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
