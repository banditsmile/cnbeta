<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property int $page_id cnbeta页面编号
 * @property string $title 标题
 * @property string $content 文章正文
 * @property string $excerpt 摘要
 * @property string $main_image
 * @property string $images
 * @property string $author 作者
 * @property string $text_direction 文章排版顺序
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id'], 'integer'],
            [['content'], 'required'],
            [['content'], 'string'],
            [['title', 'author'], 'string', 'max' => 100],
            [['excerpt', 'main_image'], 'string', 'max' => 255],
            [['images'], 'string', 'max' => 1000],
            [['text_direction'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'title' => 'Title',
            'content' => 'Content',
            'excerpt' => 'Excerpt',
            'main_image' => 'Main Image',
            'images' => 'Images',
            'author' => 'Author',
            'text_direction' => 'Text Direction',
        ];
    }
}
