<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Gallery;

/**
 * NewsSearch represents the model behind the search form of `\common\models\Gallery`.
 */
class GallerySearch extends Gallery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['gallery_name', 'details', 'introduction', 'title', 'weight', 'gallery_time', 'path'], 'safe'],
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
        $query = Gallery::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'gallery_name', $this->gallery_name])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'introduction', $this->introduction])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'gallery_time', $this->gallery_time])
            ->andFilterWhere(['like', 'path', $this->path]);

        return $dataProvider;
    }
}
