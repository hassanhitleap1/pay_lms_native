<?php


include "../Core/Route.php";
 $route = new Route();

echo  get_class($route);

echo "<br/>";
echo "thr requser url =" .$_SERVER['QUERY_STRING'];