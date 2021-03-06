<?php

namespace common\models;

use yii\db\ActiveRecord;


/**
 * Class TestCase
 * @package common\models
 * @property int $id [int(11)]
 * @property int $problem_id [int(11)]
 * @property string $input
 * @property string $output
 * @property string $created_at [datetime]
 * @property string $updated_at [datetime]
 */
class TestCase extends ActiveRecord {
    public static function tableName() {
        return 't_test_case';
    }
}