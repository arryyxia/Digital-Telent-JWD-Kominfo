<?php
$url = parse_url($_SERVER['REQUEST_URI']);
$request = $url['path'];
$query = array_key_exists('query', $url) ? $url['query'] : '';
$method = $_SERVER['REQUEST_METHOD'];
$pageDir = '/views/pages/';
$errorDir = '/views/errors/';
$controllerDir = '/controller/';

switch ($method) {
	case 'GET':
		switch ($request) {
			case '/sertif-kominfo/':
				require __DIR__ . $pageDir . 'landing.php';
				break;

			case '/sertif-kominfo/pesan':
				require __DIR__ . $pageDir . 'pesan.php';
				break;

			default:
				http_response_code(404);
				require __DIR__ . $errorDir . '404.php';
				break;
		}
		break;
	case 'POST': {
		switch ($request) {
			case '/sertif-kominfo/pesan':
				require __DIR__ . $controllerDir . 'Pesan.php';
				break;

			default:
				http_response_code(404);
				require __DIR__ . $errorDir . '404.php';
				break;
		}
		break;
	}
}