<?php

function build($pattern,$elements){
    if(!empty($pattern) and !empty($elements)){
        $patron = explode("/",$pattern);
        $estructura = array();
        $cerraduras = array();
        for($i = 0; $i < count($patron); $i++){
            if($patron[$i] == 'container'){
                array_push($estructura,$elements[$i]);
                array_push($cerraduras,'</div>');
            }else if($patron[$i] == 'block'){
                array_push($estructura,$elements[$i]);
                array_push($estructura,'</div>');
            }
        }
        for($i = 0; $i < count($cerraduras); $i++){
            array_push($estructura,$cerraduras[$i]);
        }
        return $estructura;
    }else{
        array_push($estructura,'empty parameter');
        return $estructura;
    }
}

?>