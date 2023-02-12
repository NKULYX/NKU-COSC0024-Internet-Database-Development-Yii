<?php

/**
 * Team: 明天上线队
 * Created by 郑向鹏.
 * 图册表
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string|null $gallery_name
 * @property string|null $details
 * @property string|null $path
 * @property string|null $gallery_time
 * @property string|null $introduction
 * @property string|null $title
 * @property string|null $weight
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['gallery_name', 'details', 'path', 'gallery_time', 'introduction', 'title', 'weight'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gallery_name' => 'Gallery Name',
            'details' => 'Details',
            'path' => 'Path',
            'gallery_time' => 'Gallery Time',
            'introduction' => 'Introduction',
            'title' => 'Title',
            'weight' => 'Weight',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->gallery_name;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function getGTime()
    {
        return $this->gallery_time;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getIntroduction()
    {
        return $this->introduction;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     * @return GalleryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GalleryQuery(get_called_class());
    }
}
