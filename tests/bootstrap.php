<?php

//use ZnCore\Base\Libs\DotEnv\DotEnv;
//DotEnv::init();

use ZnSandbox\Sandbox\App\Interfaces\AppInterface;
use Illuminate\Container\Container;
use ZnSandbox\Sandbox\App\Libs\ZnCore;
use ZnTool\Test\Libs\TestApp;

$container = new Container();
$znCore = new ZnCore($container);
$znCore->init();

/** @var AppInterface $appFactory */
$appFactory = $container->get(TestApp::class);
$appFactory->setBundles([
    new \ZnUser\Password\Bundle(['all']),
]);
$appFactory->init();
