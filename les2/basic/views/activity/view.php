<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 06.08.2019
 * Time: 19:01
 */

/** @var \app\models\Activity $model */

foreach ($model as $propname => $value) {
    echo $model->getAttributeLabel($propname) . ": " . $value . '<br>';
}