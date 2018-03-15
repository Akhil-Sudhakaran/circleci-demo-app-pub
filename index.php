<?php

$outBound = "http://".$_SERVER['SERVER_NAME']."/www/";
echo 'Hello';
header("Location: $outBound");

?>
