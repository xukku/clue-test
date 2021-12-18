<?php

require __DIR__ . '/vendor/autoload.php';

use FrameworkX\App;
use React\Http\Message\Response;
use Psr\Http\Message\ServerRequestInterface;

$app = new App();

$app->get('/', fn() => new Response(
	200,
	[],
	"Hello world!\n"
));

$app->get('/users/{name}', fn (ServerRequestInterface $request) => new Response(
	200,
	[],
	"Hello " . $request->getAttribute('name') . "!\n"
));

$app->run();
