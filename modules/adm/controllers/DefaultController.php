<?php

namespace app\modules\adm\controllers;
use app\modules\adm\models\CallbackSearch;
use Yii;

/**
 * Default controller for the `adm` module
 */
class DefaultController extends AppAdmController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {$time = date('H:i:s');
        $searchModel = new CallbackSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'time' => $time]);
    }
}
