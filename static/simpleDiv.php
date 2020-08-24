<?php

    
    if($container === 'container(div)/' && $end === '\(div)'){
        if(isset($content)){
            return tag::get_tag('div',null,null,$content);
        }else{
            return tag::get_tag('div');
        }
    }
        

?>