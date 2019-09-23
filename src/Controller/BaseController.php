<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 24/06/2019
 * Time: 10:32
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{

    public function make_array($entities_array){

        $return_array = [];
        foreach ($entities_array as $entity_item) {
            $return_array[] = $entity_item->getArrayParam();
        }

        return $return_array;
    }

    public function getWorktime(){
        $array_week = array(
            0=>'ПОНЕДЕЛЬНИК',
            1=>'ВТОРНИК',
            2=>'СРЕДА',
            3=>'ЧЕТВЕРГ',
            4=>'ПЯТНИЦА',
            5=>'СУББОТА',
            6=>'ВОСКРЕСЕНЬЕ',
        );
        $place = $this->getParameter('myseting_place');
        $worktime_content = file_get_contents($place.'/worktime.txt');
        $worktime_arr = explode("\n", $worktime_content);
        $work_time = [];

        foreach ($worktime_arr as $index=>$item){
            $day_arr = explode(";", $item);
            if (count($day_arr)>1) {
                $day_arr_time = explode("-", $day_arr[1]);
                $work_time[$array_week[$index]] = ['start' => $day_arr_time[0], 'finish' => $day_arr_time[1]];
            }
        }

        return $work_time;
    }
}