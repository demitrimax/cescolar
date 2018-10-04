<?php

namespace app\controllers;

use Yii;
use app\models\departamentos;
use app\models\DepartamentosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DepartamentosController implements the CRUD actions for departamentos model.
 */
class DepartamentosController extends Controller
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
     * Lists all departamentos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DepartamentosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single departamentos model.
     * @param integer $iddepa
     * @param string $maestros_idcie
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($iddepa, $maestros_idcie)
    {
        return $this->render('view', [
            'model' => $this->findModel($iddepa, $maestros_idcie),
        ]);
    }

    /**
     * Creates a new departamentos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new departamentos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'iddepa' => $model->iddepa, 'maestros_idcie' => $model->maestros_idcie]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing departamentos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $iddepa
     * @param string $maestros_idcie
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($iddepa, $maestros_idcie)
    {
        $model = $this->findModel($iddepa, $maestros_idcie);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'iddepa' => $model->iddepa, 'maestros_idcie' => $model->maestros_idcie]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing departamentos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $iddepa
     * @param string $maestros_idcie
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($iddepa, $maestros_idcie)
    {
        $this->findModel($iddepa, $maestros_idcie)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the departamentos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $iddepa
     * @param string $maestros_idcie
     * @return departamentos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($iddepa, $maestros_idcie)
    {
        if (($model = departamentos::findOne(['iddepa' => $iddepa, 'maestros_idcie' => $maestros_idcie])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
