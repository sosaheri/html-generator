# html-generator
/*require_once 'classes/html-generator.php';
*require_once 'static/comandos.php';
   * echo executethis(container,'hello word','\(div)');
    *#AHORA SI QUISIERA REALIZAR EL MISMO PATRON QUE GENERA EL COMANDO
   * #4-div_4-!class_container/contariner/block/block 
    *#con la funcion linker quedaria de esta forma:*/

        require_once 'functions/start.php';
        require_once 'functions/omision.php';
        require_once 'functions/mezclar.php';
        require_once 'functions/build.php';
        require_once 'functions/linker.php';
        foreach(linker('4_true_container/contariner/block/block',array('','','','')) as $x){
            echo $x;
        }

    #SIN EMBARGO ESTE METODO NO ES MUY EFICIENTE PORQUE NOS LIMITA A QUE ES OBLIGATORIO CREAR
    /**
     * UN ARREGLO Y SI NO QUEREMOS COLOCARLE CLASES PARA CREAR UN PATRO COMO ESTE :
     *  <DIV>
     *      <DIV>
     *          </DIV></DIV>
     *          </DIV></DIV>
     *      </DIV>
     * </DIV>
     * 
     * ES NECESARIO PASARLE UN ARREGLO VACIO CON LA MISMA CANTIDAD DE ELEMENTOS DIV QUE QUEREMOS CREAR
     * SIN EMBARGO EL RESULTADO QUE PRODUCIRA ESTA FORMA ES LA SIGUIENTE:
     * 
     * <div class="">
     *      <div class=""></div>
     *      <div class=""></div>
     * </div>
     * 
     * COMO PODEMOS OBSERVAR NO ES PARA NADA LO QUE QUEREMOS APARTE LOS DIVS CONSERVAN LA PALABRA RESERVADA CLASS Y ESTA VACIO 
     * COSA QUE NO TIENE SENTIDO HACER.
     * 
     * ES POR ESTE MOTIVO QUE SURGE EL COMANDO executethis()
     * el cual se encarga DE DEVOLVERNOS EL PATRON ECXACTAMENTE COMO SE LO PIDAMOS
     * POR EJEMPLO PARA PRODUCIR EL PATRON ANTERIOR DE 4 DIVS UTILIZANDO executethis quedaria de esta forma:
     */
     
    $block = executethis(container,null,'\(div)');
    $block .= executethis(container,null,'\(div)');
    echo executethis(container,executethis(container,$block,'\(div)'),'\(div)');

    #GENERANDO EL PATRON ANTES MENCIONADO LIMPIO E IDENTICO Y PORSUPUESTO RAPIDAMENTE EN AUTOMATICO
    #MANTENTE AL PENDIENTE DE NUEVAS APTUALIZCIONES HASTA LA PROXIMA =)
    #podemos combinar executethis() y get_tag() para generar construcciones mas eleboradas por ejemplo:
    
    $tag = new tag();
    echo $tag->get_tag('div',null,'complexDiv',executethis(container,null,'\(div)'));

    /**
     * EL PROGRAMA ANTERIOR PRODUCIRA EL SIGUIENTE RESULTADO:
     * 
     * <div class="complexDiv">
     *      <div></div>
     * </div>
     */
