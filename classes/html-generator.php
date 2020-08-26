<?php
    class r{
        static function _($tag=null,$content=null,$id=null,$clase=null){
            if(!isset($tag)){
                #trigger_error("ingresa por lo menos el primer parametro",E_USER_ERROR);
                echo "ingresa por lo menos el primer parametro";
            }else{

                if($tag === 'form' && !isset($content) && !isset($id) && !isset($clase)){
                    #trigger_error("especifica el action, method y los input",E_USER_ERROR);
                    echo "especifica el action, method y los input";
                }else if($tag === 'form' && isset($content) && isset($id) && isset($clase)){
                    if(is_array($content)){
                        $formulario = "<{$tag} action=\"{$id}\" method=\"{$clase}\">";
                        for($i = 0; $i < sizeof($content); $i++){
                            $formulario .= $content[$i];
                        } 
                        $formulario .= "</{$tag}>";
                        return $formulario;
                    }else{
                        echo "los formularios llevan inputs para funcionar";
                    }
                }else if($tag === 'input' && isset($content) && isset($id) && isset($clase)){
                    if(is_array($content)){
                        echo "los inputs no pueden llevar contenido dentro solo atributos";
                    }else{
                        return "<{$tag} type=\"{$content}\" name=\"{$id}\" id=\"{$clase}\">";
                    }
                }else if($tag === 'input' && $content === 'submit' && isset($id) && !isset($clase)){
                    return "<{$tag} type=\"{$content}\" value=\"{$id}\">";
                }else{
                ############################################################################################################################
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
                ############################################################################################################################
                }

            }
        }
    }
?>