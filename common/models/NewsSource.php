<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%news_source}}".
 *
 * @property string $source_name 名称
 * @property string $source_introduction 简介
 * @property string $source_twitter twitter
 * @property string $source_facebook facebook
 * @property string $source_instagram instagram
 * @property string $source_photo 图标路径
 *
 * @property News[] $news
 */
class NewsSource extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news_source}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source_name', 'source_introduction', 'source_twitter', 'source_facebook', 'source_instagram', 'source_photo'], 'required'],
            [['source_introduction'], 'string'],
            [['source_name'], 'string', 'max' => 20],
            [['source_twitter', 'source_facebook', 'source_instagram', 'source_photo'], 'string', 'max' => 255],
            [['source_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'source_name' => '名称',
            'source_introduction' => '简介',
            'source_twitter' => 'twitter',
            'source_facebook' => 'facebook',
            'source_instagram' => 'instagram',
            'source_photo' => '图标路径',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery|NewsQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['news_source' => 'source_name']);
    }

    /**
     * {@inheritdoc}
     * @return NewsSourceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsSourceQuery(get_called_class());
    }
}
