<?php

function mezclar($items,$names){
    $elements = array();
    if(!empty($items) and !empty($names)){
        if(count($items) == count($names)){
            for($i = 0; $i < count($items); $i++){
                array_push($elements,'<div class="'.$names[$i].'">');
            }
            return $elements;
        }else{
            array_push($elements,'invalid parameter');
            return $elements;
        }
    }else{
        array_push($elements,'empty parameter');
        return $elements;
    }
}

?>