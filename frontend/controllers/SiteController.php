<?php

namespace frontend\controllers;

use common\models\Vacancy;

/**
 * Site controller
 */
class SiteController extends AppController
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $vacancies = Vacancy::find()->where(['isPublish' => Vacancy::IS_PUBLISH])->orderBy('id ASC')->limit(5)->asArray()->all();

        return $this->render('index', [
            'vacancies' => $vacancies
        ]);
    }
}
