<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 06.08.2019
 * Time: 20:10
 */

namespace app\models;

use yii\base\Model;

class Day extends Model{

    public $activityID;
    public $dayOfTheWeek;

    public function attributeLabels(){
        return [
            'activityID' => 'ID события',
            'dayOfTheWeek' => 'День недели'
        ];
    }
}