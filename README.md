# html-generator
hi i know my repos are so basic but i was studiying hard and i think i have an idea that you will find interesting, this are my first functions and i will add more changes to each function until this functions allow you to build any html layout with a single command. thank for your patient.

ok ya que trate de explicarme en ingles hay les va en español, estoy desarrollando funciones que en conjunto son capaces de determinar lo que queremos definir con html en funcion de una cadena de caracteres. por el momento las funciones pueden crear cualquier estructura html pero el detalle es que solo generan elementos div, el siguiente paso sera que las funciones te permitan maquetar no solo con div sino que tambien tengan la capacidad de mezclar diferentes tags html, creo que este es mi primer repo que podria llegar a ser util asi que si te interesa colaborar pues clonate este repo.

La linea : error_reporting(E_ERROR | E_WARNING | E_PARSE);
nos sirve para ocultar notice de php cuando genera errores provocados por ingresar mal un parametro y nos limita a los errores
que nosotros manejamos con las funciones que a continuacion te explico:

/*LA FUNCION start($inicio) RECIBE UN UNICO PARAMETRO
        EL CUAL ESPERA UNA PEQUEÑA CADENA DE CARACTERES DE 5 SIMBOLOS
        DE LOS CUALES PUEDE SER UNA COMBINACION DE LETRAS , NUMEROS Y SIMBOLOS ESPECIALES
        EN CASO QUE EL PARAMETRO SEA EL ESPERADO , LA FUNCION RETORNA UN ARREGLO CON LOS 
        ELEMENTOS INDICADOS PREDEFINIDOS PREVIAMENTE, EN CASO CONTRARIO SE VERIFICA QUE 
        EL CALOR PASADO POR LA FUNCION SE UN NUMERO , EN CASO DE SER VERDAD LA FUNCION 
        CREARA UN ARREGLO CON N ELEMENTOS DIV DENTRO DE UN ARRAY Y ES EL ARREGLO QUE DEVOLVERA
        EN CASO CONTRARIO LA FUNCION SIMPLEMENTE TERMINA SU EJECUCION CON EL VALOR DE PARAMETRO INVALIDO
        O PARAMETRO VACIO EN CASO QUE EL USUARIO LE PASE UN VALOR EMPTY A LA FUNCION.*/


/* LA FUNCION omision($predefinidas,$xclases) RECIBE DOS PARAMETROS 
        PRIMERO VERIFICA QUE EL PRIMER PARAMETRO NO ESTE VACIO SI ES VERDAD
        VERIFICA QUE EL VALOR DEL PARAMETRO SEA IGUAL AL ACTIVADOR ESPERADO
        EN CASO CONTRARIO VERIFICA SI EL SEGUNDO PARAMETRO ESTA VACIO
        EN CASO QUE NO ESTE VACIO DEVUELVE EL ARREGLO CON LOS VALORES PREDEFINIDOS POR EL USUARIO
        EN CASO QUE EL PARAMETRO $PREDEFINIDAS OBTENGA EL VALOR ESPERADO ENTONCES 
        LA FUNCION DEVUELVE UN ARREGLO CON LAS 4 CLASES PREDEFINIDAS
        EN CUALQUIER OTRO CASO DEVUELVE INVALID PARAMETER O EMPTY PARAMETER*/


/*LA FUNCION mezclar($items,$names) RECIBE DOS ARRAYS UNO CON ELEMENTOS DIV 
        Y OTRO CON NOMBRES DE CLASES , PRIMERO SE VERIFICA QUE NO ESTEN VACIOS AMBOS 
        ARRAYS EN CASO DE ESTAR VACIOS SE DEVUELVE EMPTY PARAMETER
        EN CASO CONTRARIO SE VERIFICA QUE HAYA N CANTIDAD DE NAMES PARA N CANTIDAD DE ITEMS
        EN CASO QUE LAS CANTIDADES DE ELEMENTOS EN AMBOS ARRAY NO COINCIDA SE DEVUELVE 
        PARAMETRO INVALIDO EN CASO CONTRARIO SE ITERA N VECES Y SE PREGUNTA EN CADA ITERACION
        SI LOS ITEMS CORRESPONDEN A ETIQUETAS DIV HTML EN CASO CONTRARIO LA FUNCION RETORNA 
        INVALID PARAMETER , EN CASO DE SER VERDAD AGREGA COMO CLASS NAME CADA ELEMENTO 
        NAME A EL ELEMENTO DIV QUE SE ENCUENTRA EN LA MISMA POSICION QUE EL NAME EN SU ARREGLO
        Y FINALMENTE DEVUELVE LOS ELMENTOS DIV CON SU RESPECTIVA CLASE*/


/*LA FUNCION build($pattern,$elements) recibe un string y un array 
        PRIMERAMENTE SE VERIFICA QUE NO HAYA PARAMETROS VACIOS 
        EN CASO DE NO HABER PARAMETROS VACIOS EN FUNCION DEL PATRON QUE SE LE PASE
        A LA FUNCION DETERMINARA QUE ELEMENTOS VAN DENTRO DE QUE ELEMENTOS Y QUE ELEMENTOS 
        VAN DESPUES DE QUE ELEMENTOS REDISTRIBUYE LOS ELEMENTOS EN UN NUEVO ARREGLO
        Y DEVUELVE LA RESPUESTA EN CASO CONTRARIO DEVUELVE INVALID PARAMETER O EMPTY PARAMETER*/



FINALMENTE LA FUNCION linker coordina toda la orquesta para obtener el resultado esperado.



explicacion en video : https://www.youtube.com/watch?v=bUCT6NRsoc8


UPDATE 1 22/08/2020------------------------------------------------------------------------------------------------------------------------------------

ATENCION ESTE ES UNO DE LOS MOTIVOS POR LOS CUALES ESTAS FUNCIONES NO ESTAN LISTAS PARA PRODUCCION :
OBSERBA EL PATRON SIGUIENTE :

<header><!-- 2 container/ -->
        <h1>...</h1><!-- 3 block/ -->
        <div><!-- 4 container/ -->
                <button>...</button><!-- 5 block/ -->
        </div><!-- cerradura que se perdera -->
</header><!-- cerradura que se perdera -->
<main><!-- 6 container/ -->
......
......
......
</main>

COMO PUEDES OBSERVAR EN LA LOGICA DE LAS SIGUIENTES ITERACIONES EL CODIGO FUNCIONA CON PATRONES SIMILARES A ESTE :

<DIV>
   <DIV>
      <DIV></DIV>
      <DIV></DIV>
   </DIV>
</DIV>

PORQUE EFECTIVAMENTE NO HAY NINGUN PROBLEMA PORQUE LAS CERRADURAS QUEDAN AL FINAL PORQUE NO HAY 
CONTENEDORES FUERA DEL CONTENEDOR INICIAL

SIN EMBARGO EN EL SIGUIENTE PATRON :

<DIV>
   <DIV></DIV>
   <DIV>
      <DIV></DIV>
    </DIV> 
</DIV>
<DIV>
   <DIV></DIV>
</DIV>

COMO SE OBSERVA ESTE PATRON PRESENTA CARACTERISTICAS MISTAS PORQUE EFECTIVAMENTE 
CONTIENE CONTENEDORES PERO QUE ES NECESARIO CERRAR EL ELEMENTO EN ALGUN PUNTO ANTES QUE
LA ITERACION LLEGUE AL FINAL.

POR CONSECUENCIA EL SIGUIENTE CODIGO NO FUNCIONARA SI LO QUE SE QUIERE ES GENERAR GRANDES
CANTIDADES DE ELEMENTOS CON PATRONES SIMILARES , PERO LO QUE SI ES POSIBLE ES UTILIZAR
linker moderadamente POR EJEMPLO SI TENEMOS EL SIGUIENTE PATRON: 

<DIV>
   <DIV></DIV>
   <DIV>
      <DIV></DIV>
    </DIV> 
</DIV>
<DIV>
   <DIV></DIV>
</DIV>

PARA QUE LA FUNCION Y SU CONJUNTO DE ALIADOS SEAN UTILES ES NECESARIO DIVIDIR 
EL PATRON ANTERIOR EN DOS LLAMAS DISTINTAS INDICANDOLE EL PATRON QUE SE ADAPTE 
A NUESTRAS NECESIDADES , AQUI SE APLICA EL DIVIDE Y VENCERAS COMO TE MUESTRO ACONTINUACION:

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

ENTONCES PARA QUE EL CODIGO ANTERIOR FUNCIONE EN VEZ DE PENSAR EN METER UNA ENORME CARGA
DIVIDIMOS EL PATRON ANTERIOR EN DOS DE ESTA FORMA:

PARTE 1:
<DIV>
   <DIV></DIV>
   <DIV>
      <DIV></DIV>
    </DIV> 
</DIV>
PODEMOS OBSERVAR QUE AL DIVIDIR EL PATRON LA PARTE UNO SE ADAPTA SATISFACTORIAMENTE A LA LOGICA ANTERIOR
Y PODEMOS RESOLVER LA PARTE 1 CON EL SIGUIENTE COMANDO :

4_true_container/block/container/block

PARTE 2:
<DIV>
   <DIV></DIV>
</DIV>
Y LA PARTE 2 LA RESOLVEMOS CON EL SIGUIENTE COMANDO:

2_true_container/block

MANTENTE AL TANTO DE LAS NUEVAS ACTUALIZACIONES , ES TODO POR HOY =)

UPDATE 2 23/08/2020

require_once 'classes/html-generator.php';
require_once 'static/comandos.php';
    echo executethis(container,'hello word','\(div)');
    #AHORA SI QUISIERA REALIZAR EL MISMO PATRON QUE GENERA EL COMANDO
    #4-div_4-!class_container/contariner/block/block 
    #con la funcion linker quedaria de esta forma:
    
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
    /*$block = executethis(container,null,'\(div)');
    $block .= executethis(container,null,'\(div)');
    echo executethis(container,executethis(container,$block,'\(div)'),'\(div)');*/
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