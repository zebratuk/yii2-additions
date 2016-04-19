<?php

namespace zebratuk;

use Yii;
use yii\db\ActiveRecord;

trait RecordRelationTrait
{
    /**
     * @var ActiveRecord|null
     */
    protected $parentRelation = null;

    /**
     * @inheritdoc
     * @return ActiveQuery the newly created [[ActiveQuery]] instance.
     */
    public static function find()
    {
        return Yii::createObject(ActiveQuery::className(), [get_called_class()]);
    }

    /**
     * @param ActiveRecord $parent
     */
    public function setParentRelation(ActiveRecord $parent)
    {
        $this->parentRelation = $parent;
    }

    /**
     * @return ActiveRecord
     */
    public function getParentRelation()
    {
        return $this->parentRelation;
    }
}
