<?php

    class tag{

        private $cantidad;
        private $ids;
        private $clases;
        private $comandos;

        public function __set($atributo,$valor){
            $this->$atributo=$value;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        function get_tag($comando=null,$id=null,$clase=null,$content=null){
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
                }else{
                    return 'Comando no definido';
                }
            }
        }
        #solucion al problema de las cerraduras que se pierden
        function get_tags($orden){
            if(!empty($orden)){
                if(!empty($this->__get('cantidad')) && !empty($this->__get('ids')) && !empty($this->__get('clases')) && !empty($this->__get('comandos'))){
                    $patron = explode("/",$pattern);
                    for($i = 0; $i < sizeof($patron); $i++){
                        if($patron[$i] === 'container'){
                            
                        }else if($patron[$i] === 'block'){
                            
                        }else if($patron[$i] === 'nlcontainer'){
                            
                        }else if($patron[$i] === 'nblock'){
                            
                        }else{

                        }
                    }
                }else{

                }
            }else{
                trigger_error("ingresa el patttern",E_USER_ERROR);
            }
        }

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

    }

?>