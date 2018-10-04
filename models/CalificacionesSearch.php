<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Calificaciones;

/**
 * CalificacionesSearch represents the model behind the search form of `app\models\Calificaciones`.
 */
class CalificacionesSearch extends Calificaciones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parcial', 'promedio'], 'integer'],
            [['alumnos_matricula'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Calificaciones::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'parcial' => $this->parcial,
            'promedio' => $this->promedio,
        ]);

        $query->andFilterWhere(['like', 'alumnos_matricula', $this->alumnos_matricula]);

        return $dataProvider;
    }
}
