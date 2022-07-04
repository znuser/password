<?php

namespace ZnUser\Password\Domain\Interfaces\Repositories;

use ZnUser\Password\Domain\Entities\PasswordHistoryEntity;
use ZnCore\Domain\Collection\Libs\Collection;
use ZnCore\Domain\Repository\Interfaces\CrudRepositoryInterface;

interface PasswordHistoryRepositoryInterface extends CrudRepositoryInterface
{

    /**
     * @param int $identityId
     * @return \ZnCore\Domain\Collection\Interfaces\Enumerable | PasswordHistoryEntity[]
     */
    public function allByIdentityId(int $identityId): Collection;
}

