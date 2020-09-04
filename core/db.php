<?php 
include 'rb.php';
include './config.php';
R::setup( 'mysql:host='.$_CONFIG['db_host'].';dbname='.$_CONFIG['db_name'],$_CONFIG['db_user'], $_CONFIG['db_pass'] ); 
if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}
session_start();