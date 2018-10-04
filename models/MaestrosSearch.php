<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Maestros;

/**
 * MaestrosSearch represents the model behind the search form of `app\models\Maestros`.
 */
class MaestrosSearch extends Maestros
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcie', 'nombre', 'apellidopat', 'apellidomat', 'curp', 'genero', 'telfijo', 'cell', 'email', 'status'], 'safe'],
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
        $query = Maestros::find();

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
        $query->andFilterWhere(['like', 'idcie', $this->idcie])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellidopat', $this->apellidopat])
            ->andFilterWhere(['like', 'apellidomat', $this->apellidomat])
            ->andFilterWhere(['like', 'curp', $this->curp])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'telfijo', $this->telfijo])
            ->andFilterWhere(['like', 'cell', $this->cell])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
