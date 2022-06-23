<?php

//use ZnCore\Base\DotEnv\Domain\Libs\DotEnv;
//DotEnv::init();

use ZnCore\Base\App\Interfaces\AppInterface;
use Illuminate\Container\Container;
use ZnCore\Base\App\Libs\ZnCore;
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
