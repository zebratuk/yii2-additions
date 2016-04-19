<?php

namespace zebratuk;

trait QueryRelationTrait
{
    /**
     * @param string $name the relation name
     * @param ActiveRecordInterface|BaseActiveRecord $model the primary model
     * @return mixed the related record(s)
     */
    public function findFor($name, $model)
    {
        $result = parent::findFor($name, $model);

        if (true === is_array($result)) {
            /** @var RecordRelationTrait $relation */
            foreach ($result as $relation) {
                $relation->setParentRelation($model);
            }
        } elseif (true === is_object($result)) {
            $result->setParentRelation($model);
        }

        return $result;
    }
}
