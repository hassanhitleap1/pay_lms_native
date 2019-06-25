<?php


require "../Core/Route.php";
 $route = new Route();

$route->add('',['controller'=>'Home','action'=>'index']);
$route->add('/post',['controller'=>'Post','action'=>'index']);
$route->add('Post/show',['controller'=>'Home','action'=>'show']);
var_dump($route->getRoute());
echo "<br/>";
echo "thr requser url =" .$_SERVER['QUERY_STRING'];