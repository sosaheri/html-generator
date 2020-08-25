<?php
    class r{
        static function _($tag=null,$content=null,$id=null,$clase=null){
            if(!isset($tag)){
                trigger_error("ingresa por lo menos el primer parametro",E_USER_ERROR);
            }else{
                if(isset($id) && isset($clase) && isset($content)){
                    if(is_array($content)){
                        $estructura = "<{$tag} id=\"{$id}\" class=\"{$clase}\">";
                        for($i = 0; $i < sizeof($content); $i++){
                            $estructura .= $content[$i];
                        }
                        $estructura .= "</{$tag}>";
                        return $estructura;
                    }else{
                        return "<{$tag} id=\"{$id}\" class=\"{$clase}\">{$content}</{$tag}>";
                    }
                }else{
                    if(isset($id) && isset($clase)){
                        return "<{$tag} id=\"{$id}\" class=\"{$clase}\"></{$tag}>";
                    }else{
                        if(isset($id) && isset($content)){
                            if(is_array($content)){
                                $estructura = "<{$tag} id=\"{$id}\">";
                                for($i = 0; $i < sizeof($content); $i++){
                                    $estructura .= $content[$i];
                                }
                                $estructura .= "</{$tag}>";
                                return $estructura;
                            }else{
                                return "<{$tag} id=\"{$id}\">{$content}</{$tag}>";
                            }
                        }else{
                            if(isset($clase) && isset($content)){
                                if(is_array($content)){
                                    $estructura = "<{$tag} class=\"{$clase}\">";
                                    for($i = 0; $i < sizeof($content); $i++){
                                        $estructura .= $content[$i];
                                    }
                                    $estructura .= "</{$tag}>";
                                    return $estructura;
                                }else{
                                    return "<{$tag} class=\"{$clase}\">{$content}</{$tag}>";
                                }
                            }else{
                                if(isset($id)){
                                    return '<{$tag} id="'.$id.'"></{$tag}>';
                                }else{
                                    if(isset($clase)){
                                        return "<{$tag} class=\"{$clase}\"></{$tag}>";
                                    }else{
                                        if(isset($content)){
                                            if(is_array($content)){
                                                $estructura = "<{$tag}>";
                                                for($i = 0; $i < sizeof($content); $i++){
                                                    $estructura .= $content[$i];
                                                }
                                                $estructura .= "</{$tag}>";
                                                return $estructura;
                                            }else{
                                                return "<{$tag}>{$content}</{$tag}>";
                                            }
                                        }else{
                                            return "<{$tag}></{$tag}>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
?>