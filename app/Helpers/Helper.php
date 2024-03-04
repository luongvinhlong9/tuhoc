<?php

namespace App\Helpers;

class Helper{
    public static function subject($subjects){
        $html='';
        foreach($subjects as $key=>$subject){
            $html .='
            <th>'. $subject->id .'</th>
            <th>'. $subject->name. '</th>
            <th>'. $subject->status .'</th>
            <th>'. $subject->updated_at .'</th>
            <th> &nbsp</th>
            ';

            unset($subjects[$key]);

            $html .= self::subject($subjects);
        }
    }
}
?>
