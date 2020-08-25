# html-generator
# war of php classes
    # tag vs _tag
    # metodo 1 de tag                                           | metodo 1 de _tag     
    #get_tag($comando=null,$id=null,$clase=null,$content=null)          start($inicio)

    #crear un div simple con get_tag                            | crear un div simple con start
    #    tag::get_tag('div');                                            $_tag->start(1);

    #tag tiene un metodo especial el cual tambien tiene la capacidad de crear un div simple de esta forma:

        #   tag::executethis('container(div)/',null,'\(div)');

    #tag tambien posee un metodo get_tags el cual con la configuracion correcta es posible generar tambien un div simple:

        # tag::get_tags(array('container/'),array('div'),array(null));

    # sin embargo start apesar de ser tan limitado tiene una caracteristica que lo convierte en un methodo digno 
    # de ser utilizado y es que start te permite generar n cantidad de divs seimples y ningun metodo de la clase tag es capas de hacer tal cosa con 
    #una sola llamada para hacer dos divs por ejemplo es necesario ejecutar cualquier de los metodos disponibles dos veces por ejemplo:

        #    tag::get_tag('div'); 
        #    tag::get_tag('div'); 

    # mientras que con start simplemente colocamos la cantidad por ejemplo:

        # start(2);