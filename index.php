<?php
	header("Content-Type: text/html");
	require 'assets/lib/AltoRouter.php';

	$router = new AltoRouter();
	$router->setBasePath('/WebProjects/artist');
	define('BASE_PATH', $router->basePath);

	require("settings/links.php");

	function main($router){
		// map homepage
		$router->map( 'GET', '/', function() {
			require(LANG_DIR."strings-en.php");
			require HOMEPAGE;
		});

		$router->map( 'GET', '/about', function() {
			require(LANG_DIR."strings-en.php");
			require ABOUTPAGE;
		});

		$router->map( 'GET', '/about[*]', function() {
			require(LANG_DIR."strings-en.php");
			require ABOUTPAGE;
		});

		$router->map( 'GET', '/[a:lang]', function($lang) {
			if($lang == "ne"){
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/', function($lang) {
			if($lang == "ne"){
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/home', function($lang) {
			if($lang == "ne"){
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/home[*]', function($lang) {
			if($lang == "ne"){
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/about', function($lang) {
			if($lang == "ne"){
				require(LANG_DIR."strings-np.php");
				require ABOUTPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require ABOUTPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/about[*]', function($lang) {
			if($lang == "ne"){
				require(LANG_DIR."strings-np.php");
				require ABOUTPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require ABOUTPAGE;
			}
		});


		// match current request url
		$match = $router->match();

		// call closure or throw 404 status
		if( $match && is_callable( $match['target'] ) ) {
			call_user_func_array( $match['target'], $match['params'] ); 
		} else {
			// no route was matched
			header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
		}
	}

	main($router);
?>