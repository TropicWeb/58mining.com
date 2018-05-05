<?php  
 	
 	require_once '../vendor/autoload.php'; //Composer 
 	//require_once '../.env';
 	//Iniciar sesion
 	session_start();
 	//CONEXION BD
 	/* Conectar a una base de datos de MySQL invocando al controlador
	$dsn = "mysql:dbname=$DBNAME;host=$DBHOST";
	try { 
	   $GLOBALS['gbd'] = new PDO($dsn, $DBUSER, $DBPASS);
	} catch (PDOException $e) {
	    echo 'Falló la conexión: ' . $e->getMessage();
	}*/
 	//RUTA BASE
	$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
	$baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . $baseDir;
	define('BASE_URL', $baseUrl);
	use Phroute\Phroute\RouteCollector; //Importar el phroute
	
	$router = new RouteCollector();
	$route = $_GET['route'] ?? '/';
	

	$router->controller('/', App\Controllers\IndexController::class);

	//Respuesta del server
	$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
	$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
	echo $response;