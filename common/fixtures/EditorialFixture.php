<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class EditorialFixture extends ActiveFixture {
    public $modelClass = 'common\models\Editorial';

    public $depends = [
        'common\fixtures\ProblemFixture',
        'common\fixtures\UserFixture',
    ];

    protected function getData() {
        return [
            [
                'problem_id' => 1,
                'author_id' => 1,
                'content' => '<h2>Video from Geeksforgeeks:</h2><div class="ui embed" data-source="youtube" data-id="O6Xo21L0ybE" data-placeholder="https://semantic-ui.com/images/image-16by9.png"></div>',
                'created_at' => '2017-07-21 00:00:00',
                'updated_at' => '2017-08-03 23:46:03',
            ],
        ];
    }
}