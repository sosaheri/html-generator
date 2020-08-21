<?php

function linker($fullCommand,$userClases){
    $isEmpty = array();
    if(!empty($fullCommand)){
        $comandos = explode("_",$fullCommand);
        if($comandos[0] != '4-div'){
            $comandos[0] = (int)$comandos[0];
        }
        return build($comandos[2],mezclar(start($comandos[0]),omision($comandos[1],$userClases)));
    }else{
        array_push($isEmpty,'empty parameter');
        return $isEmpty;
    }
}

?>