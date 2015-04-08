<?php
 $languages = array('pt-br', "en");
 $header = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
 foreach($header as $lang) {
    if(in_array($lang, $languages)) {
    header("Location: $lang.php"); // i.e. fi.php or se.php
        break;
    }
 }
?>
