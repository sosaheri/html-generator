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

        static function get_tags($orden,$comandos,$contenidos){
            if(!empty($orden)){
                if($orden[0] === 'container/'){
                    if($comandos[0] === 'div'){
                        if($contenidos[0] === 'header'){
                            echo tag::executethis('container(div)/',tag::executethis('container(header)/',null,'\(header)'),'\(div)');
                        }else{
                            echo tag::executethis('container(div)/',null,'\(div)');
                        }
                    }else{
                        trigger_error("Siempre el primer comando tiene que ser div",E_USER_ERROR);
                    }
                }else{
                    trigger_error("Siempre la primer orden tiene que ser container/",E_USER_ERROR);
                }
            }else{
                trigger_error("ingresa el patttern",E_USER_ERROR);
            }
        }

    }

    class _tag{

        function start($inicio){
            $Start = array();
            $div = '<div></div>';
            if(!empty($inicio)){
                if($inicio == '4-div'){
                    $Start = array(
                        '<div></div>',
                        '<div></div>',
                        '<div></div>',
                        '<div></div>'
                    );
                    return $Start;
                }else{
                    if(is_int($inicio) == 1){
                        for($i = 0; $i < $inicio; $i++){
                            array_push($Start,$div);
                        }
                        return $Start;
                    }else{
                        array_push($Start,'invalid parameter');
                        return $Start;
                    }
                }
            }else{
                array_push($Start,'empty parameter');
                return $Start;
            }
        }

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

        function mezclar($items,$names){
            $elements = array();
            if(!empty($items) and !empty($names)){
                if(count($items) == count($names)){
                    for($i = 0; $i < count($items); $i++){
                        array_push($elements,'<div class="'.$names[$i].'">');
                    }
                    return $elements;
                }else{
                    array_push($elements,'invalid parameter');
                    return $elements;
                }
            }else{
                array_push($elements,'empty parameter');
                return $elements;
            }
        }

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

        function linker($fullCommand,$userClases=null){
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

    }

?>