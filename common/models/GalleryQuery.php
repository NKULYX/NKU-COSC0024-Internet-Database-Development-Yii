<?php

/**
 * Team: 明天上线队
 * Created by 郑向鹏.
 * 图册查询接口
 */

namespace common\models;

/**
 * This is the ActiveQuery class for [[Gallery]].
 *
 * @see Gallery
 */
class GalleryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Gallery[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Gallery|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
