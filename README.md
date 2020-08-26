# html-generator
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



