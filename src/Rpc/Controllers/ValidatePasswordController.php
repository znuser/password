<?php

namespace ZnUser\Password\Rpc\Controllers;

use ZnUser\Password\Domain\Entities\PasswordValidatorEntity;
use ZnUser\Password\Domain\Entities\ValidatorEntity;
use ZnUser\Password\Domain\Forms\UpdatePasswordForm;
use ZnUser\Password\Domain\Interfaces\Services\PasswordValidatorServiceInterface;
use ZnUser\Password\Domain\Interfaces\Services\UpdatePasswordServiceInterface;
use ZnCore\Entity\Helpers\EntityHelper;
use ZnLib\Rpc\Domain\Entities\RpcRequestEntity;
use ZnLib\Rpc\Domain\Entities\RpcResponseEntity;

class ValidatePasswordController
{

    private $service;

    public function __construct(PasswordValidatorServiceInterface $validatorService)
    {
        $this->service = $validatorService;
    }

    public function validate(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $form = new PasswordValidatorEntity();
        EntityHelper::setAttributes($form, $requestEntity->getParams());
        $this->service->validateEntity($form);
        $response = new RpcResponseEntity();
        return $response;
    }
}
