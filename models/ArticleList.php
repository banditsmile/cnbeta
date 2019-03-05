<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_list".
 *
 * @property int $id
 * @property int $sid
 * @property int $catid
 * @property int $topic
 * @property string $aid 作者id
 * @property int $user_id
 * @property string $title
 * @property string $keywords
 * @property int $comments 评论数量
 * @property int $counter 访问次数
 * @property int $mview
 * @property int $collectnum
 * @property int $good 点赞
 * @property int $bad 反对
 * @property int $score
 * @property int $ratings
 * @property int $score_story
 * @property int $ratings_story
 * @property int $pollid
 * @property int $queueid
 * @property string $inputtime 推荐时间
 * @property int $updatetime 最后更新时间
 * @property string $thumb 缩略图
 * @property string $source 来源名称
 * @property int $sourceid 来源编号
 * @property int $premium
 * @property string $url_show 手机版访问地址
 * @property string $label 文章标签
 * @property string $url pc版访问地址
 */
class ArticleList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sid', 'catid', 'topic', 'user_id', 'comments', 'counter', 'mview', 'collectnum', 'good', 'bad', 'score', 'ratings', 'score_story', 'ratings_story', 'pollid', 'queueid', 'updatetime', 'sourceid', 'premium'], 'integer'],
            [['aid', 'inputtime'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 100],
            [['keywords', 'source', 'label'], 'string', 'max' => 50],
            [['thumb', 'url_show', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sid' => 'Sid',
            'catid' => 'Catid',
            'topic' => 'Topic',
            'aid' => 'Aid',
            'user_id' => 'User ID',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'comments' => 'Comments',
            'counter' => 'Counter',
            'mview' => 'Mview',
            'collectnum' => 'Collectnum',
            'good' => 'Good',
            'bad' => 'Bad',
            'score' => 'Score',
            'ratings' => 'Ratings',
            'score_story' => 'Score Story',
            'ratings_story' => 'Ratings Story',
            'pollid' => 'Pollid',
            'queueid' => 'Queueid',
            'inputtime' => 'Inputtime',
            'updatetime' => 'Updatetime',
            'thumb' => 'Thumb',
            'source' => 'Source',
            'sourceid' => 'Sourceid',
            'premium' => 'Premium',
            'url_show' => 'Url Show',
            'label' => 'Label',
            'url' => 'Url',
        ];
    }
}
