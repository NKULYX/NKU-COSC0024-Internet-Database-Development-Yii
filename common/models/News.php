<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $news_id 标号
 * @property string $news_title 标题
 * @property string $news_content 内容
 * @property string|null $news_photo 配图路径
 * @property string|null $news_time 发表时间
 * @property string|null $news_source 来源
 *
 * @property NewsSource $newsSource
 * @property NewsComment[] $newsComments
 */
class News extends \yii\db\ActiveRecord
{
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
            [['news_title', 'news_content'], 'required'],
            [['news_title', 'news_content'], 'string'],
            [['news_photo'], 'string', 'max' => 255],
            [['news_time', 'news_source'], 'string', 'max' => 20],
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
            'news_time' => '发表时间',
            'news_source' => '来源',
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
        return $this->hasMany(NewsComment::className(), ['comment_news' => 'news_id']);
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
