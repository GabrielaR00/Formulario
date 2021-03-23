<?php

$cont=1;

$cola = new SplQueue();

 $cola->enqueue('1');
 $cola->enqueue('2');
 $cola->enqueue('3');
 $cola->enqueue('10');

//# elemntos de la cola
 //echo $cola->count();

 //Situar el puntero hasta el principio de la $cola
 $cola->rewind();

 //quitar elementos
 //$cola->dequeue();


//mostrar los elementos de la cola
while ($cola->valid())
{
  echo $cola->current(), PHP_EOL;
  $cola->next();
}







 ?>
