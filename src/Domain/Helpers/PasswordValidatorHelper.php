<?php

namespace ZnUser\Password\Domain\Helpers;

use ZnUser\Password\Domain\Interfaces\Services\PasswordValidatorServiceInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use ZnCore\Base\Libs\Container\Helpers\ContainerHelper;
use ZnCore\Domain\Exceptions\UnprocessibleEntityException;

class PasswordValidatorHelper
{

    public static function createConstraint(): Constraint
    {
        $callback = function ($object, ExecutionContextInterface $context) {
            /** @var PasswordValidatorServiceInterface $passwordValidatorService */
            $passwordValidatorService = ContainerHelper::getContainer()->get(PasswordValidatorServiceInterface::class);
            try {
                $passwordValidatorService->validate($object);
            } catch (UnprocessibleEntityException $e) {
                foreach ($e->getErrorCollection() as $validateErrorEntity) {
                    $context->addViolation($validateErrorEntity->getMessage());
                }
            }
            return false;
        };
        return new Callback($callback);
    }
}
