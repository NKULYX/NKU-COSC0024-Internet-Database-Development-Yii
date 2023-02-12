<?php

/**
 * Team: 明天上线队
 * Created by 郑向鹏.
 * 领导人态度表
 */

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * Motto model
 *
 * @property integer $id
 * @property string $author_name
 * @property string $content
 * @property string $img_path
 * @property string $identity
 */
class Motto extends ActiveRecord implements IdentityInterface
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%motto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
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
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds motto by mottoname
     *
     * @param string $AuthorName
     * @return static|null
     */
    public static function findByAuthorName($AuthorName)
    {
        return static::findOne(['author_name' => $AuthorName]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey(){}

    public function validateAuthKey($authKey){}

    /**
     * {@inheritdoc}
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getImg()
    {
        return $this->img_path;
    }

    public function getIdentity()
    {
        return $this->identity;
    }
}
