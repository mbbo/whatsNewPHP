<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use App\Command\SevenZero;
use App\Command\SevenOne;
use App\Command\SevenTwo;

$app = new Application('Console App', 'v1.0.0');
$app->add(new SevenZero());
$app->add(new SevenOne());
$app->add(new SevenTwo());
$app->run();