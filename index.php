<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new \DB\Sql();

	$res = $sql->select("SELECT * FROM tb_users");

	echo json_encode($res);

});

$app->run();

 ?>