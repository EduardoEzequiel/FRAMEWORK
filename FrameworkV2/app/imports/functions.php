<?php

namespace App\imports;

class functions{

    public function count($array){
        
        $count = 0;
        foreach((Array)$array as $key) {
            $count++;
        }

        return $count; 
    }

    public function except_last($array){

        $return = [];
        foreach((Array)$array as $arrays){
            $return[]  = array_pop($arrays);
        }
        return $return;

    }

    public function first($array){
        $first = reset($array);
        return $first;

    }


    

}