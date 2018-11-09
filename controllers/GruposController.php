<?php

namespace app\controllers;

use Yii;
use app\models\Grupos;
use app\models\GruposSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GruposController implements the CRUD actions for Grupos model.
 */
class GruposController extends Controller
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
           'ghost-access'=> [
            'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ]
        ];
    }

    /**
     * Lists all Grupos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GruposSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Grupos model.
     * @param integer $idclave
     * @param string $materias_clave
     * @param string $cicloescolar_periodo
     * @param string $maestros_idcie
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idclave, $materias_clave, $cicloescolar_periodo, $maestros_idcie)
    {
        return $this->render('view', [
            'model' => $this->findModel($idclave, $materias_clave, $cicloescolar_periodo, $maestros_idcie),
        ]);
    }

    /**
     * Creates a new Grupos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Grupos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idclave' => $model->idclave, 'materias_clave' => $model->materias_clave, 'cicloescolar_periodo' => $model->cicloescolar_periodo, 'maestros_idcie' => $model->maestros_idcie]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Grupos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idclave
     * @param string $materias_clave
     * @param string $cicloescolar_periodo
     * @param string $maestros_idcie
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idclave, $materias_clave, $cicloescolar_periodo, $maestros_idcie)
    {
        $model = $this->findModel($idclave, $materias_clave, $cicloescolar_periodo, $maestros_idcie);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idclave' => $model->idclave, 'materias_clave' => $model->materias_clave, 'cicloescolar_periodo' => $model->cicloescolar_periodo, 'maestros_idcie' => $model->maestros_idcie]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Grupos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idclave
     * @param string $materias_clave
     * @param string $cicloescolar_periodo
     * @param string $maestros_idcie
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idclave, $materias_clave, $cicloescolar_periodo, $maestros_idcie)
    {
        $this->findModel($idclave, $materias_clave, $cicloescolar_periodo, $maestros_idcie)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Grupos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idclave
     * @param string $materias_clave
     * @param string $cicloescolar_periodo
     * @param string $maestros_idcie
     * @return Grupos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idclave, $materias_clave, $cicloescolar_periodo, $maestros_idcie)
    {
        if (($model = Grupos::findOne(['idclave' => $idclave, 'materias_clave' => $materias_clave, 'cicloescolar_periodo' => $cicloescolar_periodo, 'maestros_idcie' => $maestros_idcie])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
