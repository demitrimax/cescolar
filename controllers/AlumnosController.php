<?php

namespace app\controllers;

use Yii;
use app\models\Alumnos;
use app\models\AlumnosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * AlumnosController implements the CRUD actions for Alumnos model.
 */
class AlumnosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $freeAccessActions = ['index'];

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
        ],
        ];
    }

    /**
     * Lists all Alumnos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlumnosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Alumnos model.
     * @param string $matricula
     * @param integer $carreras_idcarreras
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($matricula, $carreras_idcarreras)
    {
        return $this->render('view', [
            'model' => $this->findModel($matricula, $carreras_idcarreras),
        ]);
    }

    /**
     * Creates a new Alumnos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Alumnos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'matricula' => $model->matricula, 'carreras_idcarreras' => $model->carreras_idcarreras]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Alumnos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $matricula
     * @param integer $carreras_idcarreras
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($matricula, $carreras_idcarreras)
    {
        $model = $this->findModel($matricula, $carreras_idcarreras);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'matricula' => $model->matricula, 'carreras_idcarreras' => $model->carreras_idcarreras]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Alumnos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $matricula
     * @param integer $carreras_idcarreras
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($matricula, $carreras_idcarreras)
    {
        $this->findModel($matricula, $carreras_idcarreras)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Alumnos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $matricula
     * @param integer $carreras_idcarreras
     * @return Alumnos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($matricula, $carreras_idcarreras)
    {
        if (($model = Alumnos::findOne(['matricula' => $matricula, 'carreras_idcarreras' => $carreras_idcarreras])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
