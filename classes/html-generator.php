<?php
    class r{
        static function _($tag=null,$content=null,$id=null,$clase=null){
            if(!isset($tag)){
                return "ingresa por lo menos el primer parametro";
            }else{
                ########################IMGAGES BLOCK############################################################################
                if($tag === 'img' && !isset($content) && !isset($id) && !isset($clase)){
                    return "Las imagenes necesitan una ruta para localizar el archivo";
                }else if($tag === 'img' && isset($content) && !isset($id) && !isset($clase)){
                    return "ademas de la ruta y nombre del archivo es buena practica agregar texto al atributo alt";
                }else if($tag === 'img' && isset($content) && isset($id) && !isset($clase)){
                    return "<{$tag} src=\"{$content}\" alt=\"{$id}\">";
                }else if($tag === 'img' && isset($content) && isset($id) && isset($clase)){
                    if(is_array($clase) && sizeof($clase) == 2){
                        return "<{$tag} src=\"{$content}\" alt=\"{$id}\" id=\"{$clase[0]}\" class=\"{$clase[1]}\">";
                    }else if(is_array($clase) && sizeof($clase) < 2){
                        return "al usar un arreglo se utiliza la primer posicion para el id y la segunda para la clase";
                    }else{
                        if(strpos($clase,'id')){
                            $str = substr("name-id", 0, -3);
                            return "<{$tag} src=\"{$content}\" alt=\"{$id}\" id=\"{$str}\">";
                        }else{
                            return "<{$tag} src=\"{$content}\" alt=\"{$id}\" class=\"{$clase}\">";
                        }
                    }
                }else{
                #############################FORMS BLOCK################################################################################
                if($tag === 'form' && !isset($content) && !isset($id) && !isset($clase)){
                    return "especifica el action, method y los input";
                }else if($tag === 'form' && isset($content) && isset($id) && isset($clase)){
                    if(is_array($content)){
                        $formulario = "<{$tag} action=\"{$id}\" method=\"{$clase}\">";
                        for($i = 0; $i < sizeof($content); $i++){
                            $formulario .= $content[$i];
                        } 
                        $formulario .= "</{$tag}>";
                        return $formulario;
                    }else{
                        return "los formularios llevan inputs para funcionar";
                    }
                }else if($tag === 'input' && isset($content) && isset($id) && isset($clase)){
                    if(is_array($content)){
                        return "los inputs no pueden llevar contenido dentro solo atributos";
                    }else{
                        return "<{$tag} type=\"{$content}\" name=\"{$id}\" id=\"{$clase}\">";
                    }
                }else if($tag === 'input' && $content === 'submit' && isset($id) && !isset($clase)){
                    return "<{$tag} type=\"{$content}\" value=\"{$id}\">";
                }else{
                ##########################################GENERAL TAGS BLOCK##########################################################
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
                #########################################################################################################################
                }
                #########################################################################################################################
                }
            }
        }
    }
?>