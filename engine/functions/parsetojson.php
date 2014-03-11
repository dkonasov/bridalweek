<?php

function parseToJSON($var){

$output='{ ';

foreach($var as $key=> $value){

$output.='"'.$key.'": "'.$value.'", ';

}
$output=substr($output, 0, strlen($output)-2);
$output.=' }';
return $output;

}

?>