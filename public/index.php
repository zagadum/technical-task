<?php
/***
 *
 */
require_once __DIR__.'/../vendor/autoload.php';

$mainController = new Amadeus\Animals\RunController();
$mainController->indexAction();