<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Tinn-R Editor</title>

<?php
$lc = ""; 
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lc == "pt"){
    header("location: pt/");
    exit();
}
else{
    header("location: en/");
    exit();
}
?>
</head>
</html>
