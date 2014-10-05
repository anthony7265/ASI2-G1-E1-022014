<?php
/*
* File: dataBase.php
* 
* Creado 20-11-2010 09:51
*/

/**
* Conexion centralizada con la base de datos a traves de ADOdb
* 
*/

if (preg_match('/'.basename (__FILE__).'/', $_SERVER['PHP_SELF']))
        die ("CONTEXT ERROR!");

// Libreria ADOdb para manejo de bases de datos
include_once ("adodb/adodb.inc.php");
include_once ("adodb/adodb-exceptions.inc.php");

// Parametros de configuracion
// Server
$driver   = "mysql";
$host     = "localhost";
$scheme   = "scout";
$user     = "root";
$password = 'toor';

// Definir el objeto de la conexion
$DATA = null;
try {
	$DATA = NewADOConnection ($driver);
	//$DATA->debug = true;
	$DATA->Connect ($host, $user, $password, $scheme);
	$DATA->SetFetchMode (ADODB_FETCH_ASSOC);
	
} catch (exception $e) {
	echo "DATA ERROR: ".$e->msg;
	exit;
}
?>
