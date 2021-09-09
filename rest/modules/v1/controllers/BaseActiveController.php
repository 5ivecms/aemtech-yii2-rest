<?php

namespace api\modules\v1\controllers;

use common\models\VacancySearch;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;

class BaseActiveController extends ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items'
    ];

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::class,
            'formatParam' => 'format',
            'formats' => [
                'application\json' => Response::FORMAT_JSON,
                'application\xml' => Response::FORMAT_XML,
            ]
        ];

        return $behaviors;
    }

    public function prepareDataProvider()
    {
        $searchModel = new VacancySearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}