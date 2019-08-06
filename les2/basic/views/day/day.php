<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 06.08.2019
 * Time: 20:27
 */

/** @var \app\models\Day $day*/

foreach ($day as $propname => $value){
    if($propname == 'activityID'){
        echo $day->getAttributeLabel($propname) . ": ";
        foreach ($value as $id){
            echo $id . "  ";
        }
        echo "<br>";
    }else{
        echo $day->getAttributeLabel($propname) . ": " . $value . "<br>";
    }
}