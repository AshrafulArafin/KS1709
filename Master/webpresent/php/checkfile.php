<?php

$uploadDir = $_SERVER['DOCUMENT_ROOT']."/webpresent/Presentation";

$file = $_GET['url'];
// check if the file requested exists or not
if(!file_exists($uploadDir."/".$file)){
    http_response_code(404);
    die(404);
}

?>
