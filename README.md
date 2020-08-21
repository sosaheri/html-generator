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
