<?php

if($comando === 'div'){
    if(isset($id) && isset($clase) && isset($content)){
        return "<div id=\"{$id}\" class=\"{$clase}\">{$content}</div>";
    }else{
        if(isset($id) && isset($clase)){
            return "<div id=\"{$id}\" class=\"{$clase}\"></div>";
        }else{
            if(isset($id) && isset($content)){
                return "<div id=\"{$id}\">{$content}</div>";
            }else{
                if(isset($clase) && isset($content)){
                    return "<div class=\"{$clase}\">{$content}</div>";
                }else{
                    if(isset($id)){
                        return '<div id="'.$id.'"></div>';
                    }else{
                        if(isset($clase)){
                            return "<div class=\"{$clase}\"></div>";
                        }else{
                            if(isset($content)){
                                return "<div>{$content}</div>";
                            }else{
                                return '<div></div>';
                            }
                        }
                    }
                }
            }
        }
    }
}else{
    return 'Comando no definido';
}

?>