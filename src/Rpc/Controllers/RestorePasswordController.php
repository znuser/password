<?php

namespace ZnUser\Password\Rpc\Controllers;

use ZnUser\Password\Domain\Forms\CreatePasswordForm;
use ZnUser\Password\Domain\Forms\RequestActivationCodeForm;
use ZnUser\Password\Domain\Interfaces\Services\RestorePasswordServiceInterface;
use ZnDomain\Entity\Helpers\EntityHelper;
use ZnLib\Rpc\Domain\Entities\RpcRequestEntity;
use ZnLib\Rpc\Domain\Entities\RpcResponseEntity;

class RestorePasswordController
{

    private $service;

    public function __construct(RestorePasswordServiceInterface $restorePasswordService)
    {
        $this->service = $restorePasswordService;
    }

    public function requestActivationCode(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $form = new RequestActivationCodeForm();
        EntityHelper::setAttributes($form, $requestEntity->getParams());
        $this->service->requestActivationCode($form);
        $response = new RpcResponseEntity();
        return $response;
    }

    public function createPassword(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $form = new CreatePasswordForm();
        EntityHelper::setAttributes($form, $requestEntity->getParams());
        $this->service->createPassword($form);
        $response = new RpcResponseEntity();
        return $response;
    }
}
