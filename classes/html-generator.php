<?php

    class tag{

        static function get_tag($comando=null,$id=null,$clase=null,$content=null){
            if(!isset($comando)){
                trigger_error("ingresa por lo menos el primer parametro",E_USER_ERROR);
            }else{
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
                }else if($comando === 'header'){
                    if(isset($id) && isset($clase) && isset($content)){
                        return "<header id=\"{$id}\" class=\"{$clase}\">{$content}</header>";
                    }else{
                        if(isset($id) && isset($clase)){
                            return "<header id=\"{$id}\" class=\"{$clase}\"></header>";
                        }else{
                            if(isset($id) && isset($content)){
                                return "<header id=\"{$id}\">{$content}</header>";
                            }else{
                                if(isset($clase) && isset($content)){
                                    return "<header class=\"{$clase}\">{$content}</header>";
                                }else{
                                    if(isset($id)){
                                        return '<header id="'.$id.'"></header>';
                                    }else{
                                        if(isset($clase)){
                                            return "<header class=\"{$clase}\"></header>";
                                        }else{
                                            if(isset($content)){
                                                return "<header>{$content}</header>";
                                            }else{
                                                return '<header></header>';
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
            }
        }

        static function executethis($container=null,$content=null,$end=null){
            if(isset($container)){
                if($container === 'container(div)/' && $end === '\(div)'){
                    if(isset($content)){
                        return tag::get_tag('div',null,null,$content);
                    }else{
                        return tag::get_tag('div');
                    }
                }else if($container === 'container(header)/' && $end === '\(header)'){
                    if(isset($content)){
                        return tag::get_tag('header',null,null,$content);
                    }else{
                        return tag::get_tag('header');
                    }
                }
            }else{
                trigger_error("ingresa por lo menos el primer parametro",E_USER_ERROR);
            }
        }
    }
    
?>