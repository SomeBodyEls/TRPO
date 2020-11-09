<?php

include "core\EquationInterface.php";
include "core\LogAbstract.php";
include "core\LogInterface.php";
include "poepnko\MyLog.php";
include "poepnko\Line.php";
include "poepnko\Quatro.php";

\poepnko\MyLog::log("qwertyuiop");
\poepnko\MyLog::write();

$p = new \poepnko\Quatro();
var_dump($p->solve(0,-8,12));
