<?php

namespace frontend\models\card;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\card\Cardinfo;

/**
 * SearchCard represents the model behind the search form of `frontend\models\card\Cardinfo`.
 */
class SearchCard extends Cardinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rand_code', 'user_name', 'sex', 'address', 'birth_day', 'id_card'], 'safe'],
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
        $query = Cardinfo::find();

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
        $query->andFilterWhere(['like', 'rand_code', $this->rand_code])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'birth_day', $this->birth_day])
            ->andFilterWhere(['like', 'id_card', $this->id_card]);

        return $dataProvider;
    }
}
