<?php

    const container = 'container(div)/';

    function executethis($container=null,$content=null,$end=null){
        if(isset($container)){
            if($container === 'container(div)/' && $end === '\(div)'){
                if(isset($content)){
                    return tag::get_tag('div',null,null,$content);
                }else{
                    return tag::get_tag('div');
                }
            }
        }else{
            trigger_error("ingresa por lo menos el primer parametro",E_USER_ERROR);
        }
    }

?>