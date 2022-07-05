<?php

namespace ZnUser\Password\Domain\Interfaces\Repositories;

use ZnCore\Domain\Collection\Interfaces\Enumerable;
use ZnUser\Password\Domain\Entities\PasswordHistoryEntity;
use ZnCore\Domain\Collection\Libs\Collection;
use ZnCore\Domain\Repository\Interfaces\CrudRepositoryInterface;

interface PasswordHistoryRepositoryInterface extends CrudRepositoryInterface
{

    /**
     * @param int $identityId
     * @return Enumerable | PasswordHistoryEntity[]
     */
    public function allByIdentityId(int $identityId): Enumerable;
}

