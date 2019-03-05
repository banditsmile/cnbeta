<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\articleList;

/**
 * ArticleListSearch represents the model behind the search form of `app\models\articleList`.
 */
class ArticleListSearch extends articleList
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sid', 'catid', 'topic', 'user_id', 'comments', 'counter', 'mview', 'collectnum', 'good', 'bad', 'score', 'ratings', 'score_story', 'ratings_story', 'pollid', 'queueid', 'updatetime', 'sourceid', 'premium'], 'integer'],
            [['aid', 'title', 'keywords', 'inputtime', 'thumb', 'source', 'url_show', 'label', 'url'], 'safe'],
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
        $query = articleList::find();

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
            'sid' => $this->sid,
            'catid' => $this->catid,
            'topic' => $this->topic,
            'user_id' => $this->user_id,
            'comments' => $this->comments,
            'counter' => $this->counter,
            'mview' => $this->mview,
            'collectnum' => $this->collectnum,
            'good' => $this->good,
            'bad' => $this->bad,
            'score' => $this->score,
            'ratings' => $this->ratings,
            'score_story' => $this->score_story,
            'ratings_story' => $this->ratings_story,
            'pollid' => $this->pollid,
            'queueid' => $this->queueid,
            'updatetime' => $this->updatetime,
            'sourceid' => $this->sourceid,
            'premium' => $this->premium,
        ]);

        $query->andFilterWhere(['like', 'aid', $this->aid])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'inputtime', $this->inputtime])
            ->andFilterWhere(['like', 'thumb', $this->thumb])
            ->andFilterWhere(['like', 'source', $this->source])
            ->andFilterWhere(['like', 'url_show', $this->url_show])
            ->andFilterWhere(['like', 'label', $this->label])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
