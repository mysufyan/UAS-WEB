<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Beli;

/**
 * BeliSearch represents the model behind the search form about `app\models\Beli`.
 */
class BeliSearch extends Beli
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nofaktur', 'tgl', 'kode'], 'safe'],
            [['qty'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Beli::find();

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
            'tgl' => $this->tgl,
            'qty' => $this->qty,
        ]);

        $query->andFilterWhere(['like', 'nofaktur', $this->nofaktur])
            ->andFilterWhere(['like', 'kode', $this->kode]);

        return $dataProvider;
    }
}
