<?php
session_start();
include '../../../conf/main.php';
include 'libs/oauth/EpiCurl.php';
include 'libs/oauth/EpiOAuth.php';
include 'libs/oauth/EpiTwitter.php';
include 'libs/functions.php';
include 'inc/user_name_from_uri.php';
include 'model/users.php';
include 'model/classes.php';
include 'model/wmslayers.php';
include 'model/databases.php';
include 'libs/FirePHPCore/FirePHP.class.php';
include 'libs/FirePHPCore/fb.php';
include 'model/tables.php';
include 'model/settings_viewer.php';
include 'wms/mapfile.php.map';
include 'model/shapefile.php';
include 'model/sqlapi.php';


$postgisdb = $parts[4]; 

header('Content-Type: text/plain');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past

include_once("libs/phpgeometry_class.php");
include_once("functions.php");
include_once("libs/JSON.php");
include_once("PEAR/XML/Serializer.php");

$postgisObject = new postgis();

$json = &new Services_JSON();

$serializer_options = array (
		   'addDecl' => TRUE,
   		   'encoding' => 'UTF-8',
		   'indent' => '  ',
		   'rootName' => 'response',
		); 
$serializer = &new XML_Serializer($serializer_options);
?>
