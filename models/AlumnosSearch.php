<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumnos;

/**
 * AlumnosSearch represents the model behind the search form of `app\models\Alumnos`.
 */
class AlumnosSearch extends Alumnos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matricula', 'nombre', 'apellidopat', 'apellidomat', 'curp', 'genero', 'telfijo', 'cell', 'email', 'fechains', 'nss', 'contacto'], 'safe'],
            [['status_idstatus', 'carreras_idcarreras'], 'integer'],
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
        $query = Alumnos::find();

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
            'fechains' => $this->fechains,
            'status_idstatus' => $this->status_idstatus,
            'carreras_idcarreras' => $this->carreras_idcarreras,
        ]);

        $query->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellidopat', $this->apellidopat])
            ->andFilterWhere(['like', 'apellidomat', $this->apellidomat])
            ->andFilterWhere(['like', 'curp', $this->curp])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'telfijo', $this->telfijo])
            ->andFilterWhere(['like', 'cell', $this->cell])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nss', $this->nss])
            ->andFilterWhere(['like', 'contacto', $this->contacto]);

        return $dataProvider;
    }
}
