<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 06.08.2019
 * Time: 20:18
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Day;

class DayController extends Controller{

    public function actionIndex(){
        return "Day контроллер";
    }

    public function actionView(){
        $day = new Day();
        if(date('N') >= 1 && date('N') <= 5){
            $day->dayOfTheWeek = 'Workday';
        }else{
            $day->dayOfTheWeek = 'Holiday';
        }
        $day->activityID = [1,4,5,6,9];

        return $this->render('day', ['day' => $day]);
    }

}