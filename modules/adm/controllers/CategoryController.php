<?php

namespace app\modules\adm\controllers;

use app\models\HiProducts;
use Yii;
use app\models\HiCategory;
use app\modules\adm\models\CategorySearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * CategoryController implements the CRUD actions for HiCategory model.
 */
class CategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all HiCategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HiCategory model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {

        $dataProvider = new ActiveDataProvider([
            'query' => HiProducts::find()->where(['category_id'=>$id]),
        ]);


        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new HiCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HiCategory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing HiCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $session = Yii::$app->session;
        $session->open();
        $model->dir=$session['dir'];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    public function actionUpload($id){
        $model = $this->findModel($id);
        /* Функция для удаления лишних файлов: сюда, помимо удаления текущей и
        родительской директории, так же можно добавить файлы,
        не являющиеся картинкой (проверяя расширение) */
        function excess($files) {
            $result = array();
            for ($i = 0; $i < count($files); $i++) {
                if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
            }
            return $result;
        }

        $dir=Yii::getAlias('@webroot').'/images/upload/'.'/'.$id;;
        $dirShow='/images/upload/'.$id;

        $session = Yii::$app->session;
        $session->open();
        $session['dir']=$dirShow;

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        $files = scandir($dir); // Получаем список файлов из этой директории
        $files = excess($files); // Удаляем лишние файлы

        //удаление файла
        if(isset($_GET['del'])){
            $filename = $dir.'/'.$_GET['del'];
            @unlink($filename);
            return $this->redirect('upload?id='.$id);
        }

        //загрузка файла
        $model = new UploadForm();
        if(Yii::$app->request->post())
        {



            $model->file = UploadedFile::getInstance($model, 'file');
            $filename = substr(md5(microtime() . rand(0, 9999)), 0, 20);

            if ($model->validate()) {
                $path = $dir .'/'.$filename.'.';
                $model->file->saveAs($path.$model->file->extension);
                return $this->refresh();
            }
        }

        return $this->render('upload',compact('model','files','dirShow'));
    }
    /**
     * Deletes an existing HiCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HiCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HiCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HiCategory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
