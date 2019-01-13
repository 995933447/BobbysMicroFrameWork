<?php  

$app = require '../bootstrap/app.php';

$request = new \Bobby\Component\Http\Request;

$app->responsePipeline($request);