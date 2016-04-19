<?php

namespace zebratuk;

use yii\db\ActiveQuery as BaseActiveQuery;

class ActiveQuery extends BaseActiveQuery
{
    use QueryRelationTrait;
}
