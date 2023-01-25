<?php

namespace backend\controllers;

use Yii;
use common\models\News;
use common\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'backend_layout';
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout = 'backend_layout';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'backend_layout';
        $model = new News();

        if (Yii::$app->request->post('is_create')) {
            $model->news_title = Yii::$app->request->post('news_title');
            $model->news_abstract = Yii::$app->request->post('news_abstract');
            $model->news_content = Yii::$app->request->post('news_content');
            $model->news_date = Yii::$app->request->post('news_date');
            $model->news_source = Yii::$app->request->post('news_source');
            $filename = date('YmdHis') . '_' . $_FILES['file']['name'];
            $temp_name = $_FILES['file']['tmp_name'];
            if (move_uploaded_file($temp_name, '../../common/static/images/news/'.$filename)){
                $model->news_photo = $filename;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->news_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout = 'backend_layout';
        $model = $this->findModel($id);

        if (Yii::$app->request->post('is_update')) {
            $model->news_title = Yii::$app->request->post('news_title');
            $model->news_abstract = Yii::$app->request->post('news_abstract');
            $model->news_content = Yii::$app->request->post('news_content');
            $model->news_date = Yii::$app->request->post('news_date');
            $model->news_source = Yii::$app->request->post('news_source');
            if(isset($_FILES['file']['name'])) {
                $filename = date('YmdHis') . '_' . $_FILES['file']['name'];
                $temp_name = $_FILES['file']['tmp_name'];
                if (move_uploaded_file($temp_name, '../../common/static/images/news/'.$filename)){
                    $model->news_photo = $filename;
                }
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->news_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->layout = 'backend_layout';
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionTest()
    {
        var_dump(Yii::$app->request->post());
//        var_dump($_FILES['file']['name']);
//        var_dump($_FILES['file']['tmp_name']);
        $size = $_FILES['file']['size'];
        $filename = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];
        if ($size > 2*1024*1024){
            //
            echo "<script>alert('文件大小超过2M大小');window.history.go(-1);</script>";
            exit();
        }
//        $arr = pathinfo($filename);
//        $ext_suffix = $arr['extension'];
//        $new_filename = date('YmdHis',time()).rand(100,1000).'.'.$ext_suffix;
//        if (move_uploaded_file($temp_name, '../../common/static/images/news/'.$filename)){
//            echo "<script>alert('文件上传成功！');window.history.go(-1);</script>";
//        }
    }
}
