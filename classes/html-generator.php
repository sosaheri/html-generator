<?php

    class tag{

        private $cantidadElementos;
        private $ids;
        private $clases;
        private $orden;

        public function __set($atributo,$valor){
            $this->$atributo=$value;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

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
                                    return "<div class=\"{$clse}\">{$content}</div>";
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

        static function get_tags(){

        }

    }

?>