<?php

namespace app\controllers;

use Yii;
use app\models\Municipio;
use app\models\MuinicipioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MunicipioController implements the CRUD actions for Municipio model.
 */
class MunicipioController extends Controller
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
     * Lists all Municipio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MuinicipioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Municipio model.
     * @param integer $idmuni
     * @param integer $estado_idedo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idmuni, $estado_idedo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idmuni, $estado_idedo),
        ]);
    }

    /**
     * Creates a new Municipio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Municipio();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idmuni' => $model->idmuni, 'estado_idedo' => $model->estado_idedo]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Municipio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idmuni
     * @param integer $estado_idedo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idmuni, $estado_idedo)
    {
        $model = $this->findModel($idmuni, $estado_idedo);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idmuni' => $model->idmuni, 'estado_idedo' => $model->estado_idedo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Municipio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idmuni
     * @param integer $estado_idedo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idmuni, $estado_idedo)
    {
        $this->findModel($idmuni, $estado_idedo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Municipio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idmuni
     * @param integer $estado_idedo
     * @return Municipio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idmuni, $estado_idedo)
    {
        if (($model = Municipio::findOne(['idmuni' => $idmuni, 'estado_idedo' => $estado_idedo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionMunicipios($estado) 
    {
        $municipios = \app\models\municipio::find()
        ->where(['estado_idedo'=>$estado])
        ->orderBy('nomMunicipio')
        ->all();
        echo '<option value="">Seleccione uno</option>';
        foreach($municipios as $municipio) {
            echo "<option value='{$municipio->idmuni}'>{$municipio->nomMunicipio}</option>\n";
        }
    }
}
