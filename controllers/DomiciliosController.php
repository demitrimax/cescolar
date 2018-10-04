<?php

namespace app\controllers;

use Yii;
use app\models\Domicilios;
use app\models\DomiciliosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DomiciliosController implements the CRUD actions for Domicilios model.
 */
class DomiciliosController extends Controller
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
     * Lists all Domicilios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DomiciliosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Domicilios model.
     * @param integer $iddom
     * @param integer $estado_idestado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($iddom, $estado_idestado)
    {
        return $this->render('view', [
            'model' => $this->findModel($iddom, $estado_idestado),
        ]);
    }

    /**
     * Creates a new Domicilios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Domicilios();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'iddom' => $model->iddom, 'estado_idestado' => $model->estado_idestado]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Domicilios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $iddom
     * @param integer $estado_idestado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($iddom, $estado_idestado)
    {
        $model = $this->findModel($iddom, $estado_idestado);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'iddom' => $model->iddom, 'estado_idestado' => $model->estado_idestado]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Domicilios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $iddom
     * @param integer $estado_idestado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($iddom, $estado_idestado)
    {
        $this->findModel($iddom, $estado_idestado)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Domicilios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $iddom
     * @param integer $estado_idestado
     * @return Domicilios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($iddom, $estado_idestado)
    {
        if (($model = Domicilios::findOne(['iddom' => $iddom, 'estado_idestado' => $estado_idestado])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
