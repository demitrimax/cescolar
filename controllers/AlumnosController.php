<?php

namespace app\controllers;

use Yii;
use app\models\Alumnos;
use app\models\AlumnosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use kartik\mpdf\Pdf; //libreria para generar el PDF


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
    public function actionReporte() {
            $models = Alumnos::find()->limit(1000)->all();

            //var_dump($models);
            // get your HTML raw content without any layouts or scripts
            $content = $this->renderPartial('index2', ['titulo'=>'Título del Reporte','models' => $models]);
            // setup kartik\mpdf\Pdf component
            $pdf = new Pdf([
                // set to use core fonts only
                'mode' => Pdf::MODE_CORE,
                // A4 paper format
                'format' => Pdf::FORMAT_A4,
                // portrait orientation
                'orientation' => Pdf::ORIENT_PORTRAIT,
                // stream to browser inline
                'destination' => Pdf::DEST_BROWSER,
                // your html content input
                'content' => $content,
                // format content from your own css file if needed or use the
                // enhanced bootstrap css built by Krajee for mPDF formatting
                'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
                // any css to be embedded if required
                'cssInline' => '.kv-heading-1{font-size:18px}',
                // set mPDF properties on the fly
                //'options' => [ 'title' => 'Título del Reporte'],
                // call mPDF methods on the fly
                'methods' => [
                    'SetHeader'=>['Encabezado del Reporte||Alumnos'],
                    'SetFooter'=>['{DATE j-m-Y}|Alumnos|Página {PAGENO}'],
                        ]
                ]);
            // return the pdf output as per the destination setting
            return $pdf->render();
            }

            public function actionReportealumno($matricula,$carreras_idcarreras)
            {
                //$models = Alumnos::find()->limit(1000)->all();
                // return $this->render('view', [
            //'model' => $this->findModel($matricula, $carreras_idcarreras),
                // ]);
            //var_dump($models);
            // get your HTML raw content without any layouts or scripts
            $content = $this->renderPartial('viewalumno', ['titulo'=>'Título del Reporte','model' => $this->findModel($matricula, $carreras_idcarreras)]);
            // setup kartik\mpdf\Pdf component
            $pdf = new Pdf([
                // set to use core fonts only
                'mode' => Pdf::MODE_CORE,
                // A4 paper format
                'format' => Pdf::FORMAT_A4,
                // portrait orientation
                'orientation' => Pdf::ORIENT_PORTRAIT,
                // stream to browser inline
                'destination' => Pdf::DEST_BROWSER,
                // your html content input
                'content' => $content,
                // format content from your own css file if needed or use the
                // enhanced bootstrap css built by Krajee for mPDF formatting
                'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
                // any css to be embedded if required
                'cssInline' => '.kv-heading-1{font-size:18px}',
                // set mPDF properties on the fly
                //'options' => [ 'title' => 'Título del Reporte'],
                // call mPDF methods on the fly
                'methods' => [
                    'SetHeader'=>['Encabezado del Reporte||Alumnos'],
                    'SetFooter'=>['{DATE j-m-Y}|Alumnos|Página {PAGENO}'],
                        ]
                ]);
            // return the pdf output as per the destination setting
            return $pdf->render();

                // return $this->render('view', ['model' => $this->findModel($matricula, $carreras_idcarreras),    ]);
            }


}
