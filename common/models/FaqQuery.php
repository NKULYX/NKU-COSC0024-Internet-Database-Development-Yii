<?php

/**
 * Team: 明天上线队
 * Created by 赵建坤.
 * 问答查询接口
 */

namespace common\models;

/**
 * This is the ActiveQuery class for [[Faq]].
 *
 * @see Faq
 */
class FaqQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Faq[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Faq|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
