# html-generator

NOTA* al ver este documento fuera del editor probablemente en algunas lineas se omita el _ pero en la practica nunca debe de faltar el _
porque _ es el nombre del metodo que realiza todas las operaciones.

r es el nombre de la clase que contiene al metodo _ y como es un metodo estatico
se utilizan :: para llamar al metodo de la clase.

just use this class for make html tags or your own xhml tags 

for example how to make a div:

r::_('div');  that easy

how to add content inside the div :

r::_('div','div with content');

how to add a id :

r::_('div',null,'myId');

how to add a class name :

r::_('div',null,null,'myClass');

also if you want to add more than 1 tag inside a tag use and array in the content parameter with as many as tags you want like this

r::_('div',array(r::_('header',r::_('nav','nav inside the header')),r::_('nav','nav outside the header')));

you can repeat and combine all the variations whatever you want as many times as you want 

hope this make sense for you and i hope it is useful for you also.

now r can make forms if you want to create a simple form with a text field and the submit button just use

r::_('form',array(r::_('input','text','nombre','name'),r::_('input','submit','enviar')),'action.php','post');

of course you can add as many inputs as you want ;)

Now if you want to create a image tag you can do this variations:

if you want a image in html without id or class you do this:

 <*img src="path" alt="description"> 

the tag above can be done by this:

r::_('img','path','description');

if you want to add a class to the image above you can do it like this:

r::_('img','path','description','class');

if you want to add an id you have to add both the id and the class with an array like this:

r::_('img','path','description',array('id','class'));

the first position of the array is used for the id identifider and the second for the class name or

you can add -id in the end of the className parameter for add a single id to your image like this: 

r::_('img','./','imagen con un id','name-id');
