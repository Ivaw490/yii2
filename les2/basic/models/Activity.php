<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 06.08.2019
 * Time: 17:52
 */

namespace app\models;

use yii\base\Model;

class Activity extends Model{

    public $id;
    public $title;
    public $beginDate;
    public $endDate;
    public $userId;
    public $body;
    public $priority;

    public function attributeLabels()
    {
        return [
            'id' => 'ID события',
            'title' => 'Название события',
            'beginDate' => 'Начало события',
            'endDate' => 'Окончание события',
            'userId' => 'ID автора',
            'body' => 'Тело события',
            'priority' => 'Приоритет события'
        ];
    }
}