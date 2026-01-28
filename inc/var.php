<?php
$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    $path = '/property-golden-visa/';
    //$path = '/';
    $dir = 'https://'.$_SERVER['SERVER_NAME'].$path;
    $docRoot = $_SERVER['DOCUMENT_ROOT'];
} else {
    $path = '/property-golden-visa/';
    $dir = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$path;
    $docRoot = $_SERVER['DOCUMENT_ROOT'].$path;
}







if(!isset($pageclass)){$pageclass="default";}
if(!isset($title)){$title=" International Mice Summit";}
if(!isset($desc)){$desc="";}
$ver = '1.0'.rand();

