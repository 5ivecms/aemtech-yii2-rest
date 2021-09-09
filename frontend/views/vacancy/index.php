<?php

/* @var $this yii\web\View */
/* @var $vacancies common\models\Vacancy[] */
/* @var $pages array */

use yii\bootstrap4\LinkPager;
use yii\helpers\Url;

$this->title = 'Каталог вакансий';
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

    <?= LinkPager::widget([
        'pagination' => $pages,
        'nextPageLabel' => "<span aria-hidden=\"true\">&raquo;</span>\n<span class=\"sr-only\"></span>",
        'prevPageLabel' => "<span aria-hidden=\"true\">&laquo;</span>\n<span class=\"sr-only\"></span>"
    ]); ?>
</div>
