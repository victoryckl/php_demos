<?php

echo date("Y-m-d"), "<br/>";
echo date("Y/m/d"), "<br/>";
echo date("Y.m.d"), "<br/>";

echo date("Y.m.d D N \Y\m\d\D"), "<br/>";
echo date("Y.m.jS z"), "<br/>";
echo date("Y-m-d H:i:s"), "<br/>";
echo date("Y-n-j G:i:s.u"), "<br/>";

$tomorrow = mktime(0,0,0,date('m'),date('d')+1, date('Y'));
echo "Tomorrow is " . date('Y/m/d', $tomorrow), "<br/>";

echo date("l jS of F Y h:i:s A"), "<br/>";
?>