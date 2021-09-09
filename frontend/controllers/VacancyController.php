<?php

namespace frontend\controllers;

use common\models\Vacancy;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class VacancyController extends AppController
{
    public function actionIndex($page = 1)
    {
        $query = Vacancy::find()->where(['isPublish' => Vacancy::IS_PUBLISH])->orderBy('id ASC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5, 'pageSizeParam' => false, 'forcePageParam' => false,]);
        $vacancies = $query->offset($pages->offset)->orderBy('id DESC')->limit($pages->limit)->asArray()->all();

        return $this->render('index', [
            'vacancies' => $vacancies,
            'pages' => $pages
        ]);
    }

    public function actionView($id)
    {
        $vacancy = Vacancy::find()->where(['id' => $id])->andWhere(['isPublish' => Vacancy::IS_PUBLISH])->asArray()->one();
        if (!$vacancy) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('view', [
            'vacancy' => $vacancy
        ]);
    }
}