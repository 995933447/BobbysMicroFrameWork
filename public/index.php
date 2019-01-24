<?php

$app = require '../bootstrap/app.php';

// $request = new \Bobby\Component\Http\Request;
$request = \Bobby\Component\Http\Request\InstanceFactory::make();

$app->responsePipeline($request);