<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Municipio;

/**
 * MuinicipioSearch represents the model behind the search form of `app\models\Municipio`.
 */
class MuinicipioSearch extends Municipio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmuni', 'estado_idedo'], 'integer'],
            [['nomMunicipio'], 'safe'],
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
        $query = Municipio::find();

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
            'idmuni' => $this->idmuni,
            'estado_idedo' => $this->estado_idedo,
        ]);

        $query->andFilterWhere(['like', 'nomMunicipio', $this->nomMunicipio]);

        return $dataProvider;
    }
}
