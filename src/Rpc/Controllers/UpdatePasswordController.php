<?php

namespace ZnUser\Password\Rpc\Controllers;

use ZnUser\Password\Domain\Forms\UpdatePasswordForm;
use ZnUser\Password\Domain\Interfaces\Services\UpdatePasswordServiceInterface;
use ZnCore\Entity\Helpers\EntityHelper;
use ZnLib\Rpc\Domain\Entities\RpcRequestEntity;
use ZnLib\Rpc\Domain\Entities\RpcResponseEntity;

class UpdatePasswordController
{

    private $service;

    public function __construct(UpdatePasswordServiceInterface $updatePasswordService)
    {
        $this->service = $updatePasswordService;
    }

    public function update(RpcRequestEntity $requestEntity): RpcResponseEntity
    {
        $form = new UpdatePasswordForm();
        EntityHelper::setAttributes($form, $requestEntity->getParams());
        $this->service->update($form);
        $response = new RpcResponseEntity();
        return $response;
    }
}
