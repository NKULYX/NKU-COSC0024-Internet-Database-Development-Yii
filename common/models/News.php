<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $news_id 标号
 * @property string $news_title 标题
 * @property string $news_content 内容
 * @property string $news_photo 配图路径
 * @property string $news_date 发表日期
 * @property string $news_source 来源
 * @property string $news_abstract 摘要
 *
 * @property NewsSource $newsSource
 * @property NewsComment[] $newsComments
 */
class News extends \yii\db\ActiveRecord
{

    private $comments;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_title', 'news_content', 'news_photo', 'news_date', 'news_source', 'news_abstract'], 'required'],
            [['news_title', 'news_content', 'news_abstract'], 'string'],
            [['news_date'], 'safe'],
            [['news_photo'], 'string', 'max' => 255],
            [['news_source'], 'string', 'max' => 20],
            [['news_source'], 'exist', 'skipOnError' => true, 'targetClass' => NewsSource::className(), 'targetAttribute' => ['news_source' => 'source_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => '标号',
            'news_title' => '标题',
            'news_content' => '内容',
            'news_photo' => '配图路径',
            'news_date' => '发表日期',
            'news_source' => '来源',
            'news_abstract' => '摘要',
        ];
    }

    /**
     * Gets query for [[NewsSource]].
     *
     * @return \yii\db\ActiveQuery|NewsSourceQuery
     */
    public function getNewsSource()
    {
        return $this->hasOne(NewsSource::className(), ['source_name' => 'news_source']);
    }

    /**
     * Gets query for [[NewsComments]].
     *
     * @return \yii\db\ActiveQuery|NewsCommentQuery
     */
    public function getNewsComments()
    {
        if(!isset($this->comments)) {
            $this->comments = $this->hasMany(NewsComment::className(), ['comment_news' => 'news_id']);
        }
        return $this->comments;
    }

    public function getNewsCommentNum()
    {
        return $this->getNewsComments()->count();
    }

    /**
     * {@inheritdoc}
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
