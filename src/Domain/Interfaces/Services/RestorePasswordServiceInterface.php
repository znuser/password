<?php

namespace ZnUser\Password\Domain\Interfaces\Services;

use ZnUser\Password\Domain\Forms\CreatePasswordForm;
use ZnUser\Password\Domain\Forms\RequestActivationCodeForm;
use ZnCore\Domain\Entity\Exceptions\AlreadyExistsException;
use ZnCore\Domain\Entity\Exceptions\NotFoundException;
use ZnCore\Base\Libs\Validation\Exceptions\UnprocessibleEntityException;

interface RestorePasswordServiceInterface
{

    /**
     * @param RequestActivationCodeForm $requestActivationCodeForm
     * @throws AlreadyExistsException
     * @throws UnprocessibleEntityException
     */
    public function requestActivationCode(RequestActivationCodeForm $requestActivationCodeForm);

    /**
     * @param CreatePasswordForm $createPasswordForm
     * @throws UnprocessibleEntityException
     * @throws NotFoundException
     */
    public function createPassword(CreatePasswordForm $createPasswordForm);

}
