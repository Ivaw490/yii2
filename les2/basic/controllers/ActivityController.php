<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 06.08.2019
 * Time: 17:40
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Activity;

class ActivityController extends Controller{


    public function actionIndex(){
        return "Index контроллера активности";
    }

    public function actionView(){
        $model = new Activity();
        $model->id = '1';
        $model->title = 'Заголовок';
        $model->beginDate = date('Y-m-d h:m');
        $model->endDate = date('Y-m-d h:m' , strtotime('+1 day'));
        $model->userId = '1';
        $model->body = 'Тут могла быть ваша ре... тело активности';
        $model->priority = 'Высший!';

        return $this->render('view', ['model' => $model]);
    }


}