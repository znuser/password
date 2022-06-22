<?php

namespace ZnUser\Password\Domain\Services;

use ZnUser\Password\Domain\Interfaces\Services\PasswordBlacklistServiceInterface;
use ZnCore\Domain\EntityManager\Interfaces\EntityManagerInterface;
use ZnCore\Domain\Service\Base\BaseCrudService;
use ZnUser\Password\Domain\Entities\PasswordBlacklistEntity;

class PasswordBlacklistService extends BaseCrudService implements PasswordBlacklistServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return PasswordBlacklistEntity::class;
    }

    public function isHas(string $password) : bool
    {
        return $this->getRepository()->isHas($password);
    }
}
