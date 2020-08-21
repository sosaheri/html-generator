<?php

function omision($predefinidas,$xclases){
    $Clases = array();
    if(!empty($predefinidas)){
        if($predefinidas == '4-!class' and empty($xclases)){
            $Clases = array(
                        'Flip-Card',
                        'Flip-Card-Inner',
                        'Flip-Card-Front',
                        'Flip-Card-Back'
                        );
            return $Clases;
        }else{
            if(!empty($xclases) and $predefinidas === 'true'){
                for($i = 0; $i < count($xclases); $i++){
                    array_push($Clases,$xclases[$i]);
                }
                return $Clases;
            }else{
                array_push($Clases,'invalid parameter');
                return $Clases;
            }
        }
    }else{
        array_push($Clases,'empty parameter');
        return $Clases;
    }
}

?>