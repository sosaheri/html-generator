<?php

function start($inicio){
    $Start = array();
    $div = '<div></div>';
    if(!empty($inicio)){
        if($inicio == '4-div'){
            $Start = array(
                '<div></div>',
                '<div></div>',
                '<div></div>',
                '<div></div>'
            );
            return $Start;
        }else{
            if(is_int($inicio) == 1){
                for($i = 0; $i < $inicio; $i++){
                    array_push($Start,$div);
                }
                return $Start;
            }else{
                array_push($Start,'invalid parameter');
                return $Start;
            }
        }
    }else{
        array_push($Start,'empty parameter');
        return $Start;
    }
}

?>