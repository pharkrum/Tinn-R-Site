<?php
$lc = ""; 
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lc == "pt"){
    header("location: pt");
    exit();
}
else{
    header("location: en");
    exit();
}
?>