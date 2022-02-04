<?php


class bike
{



    function name($brand, $year, $model)
    {
        return "The Brand of this bike is {$brand} it is a {$model} model and its from year {$year}";
    }

    function set_weight_in_lbs($weight_kg)
    {
        echo " Das Fahrrad wiegt" . $weight_kg * 2,204 . "kg";
    }


}

$bike1 = new bike();
echo $bike1->name('mcKenzie', '2029', 'BMX');