<?php

namespace ZnUser\Password\Domain\Interfaces\Repositories;

use ZnUser\Password\Domain\Entities\PasswordHistoryEntity;
use ZnCore\Domain\Collection\Libs\Collection;
use ZnCore\Domain\Repository\Interfaces\CrudRepositoryInterface;

interface PasswordHistoryRepositoryInterface extends CrudRepositoryInterface
{

    /**
     * @param int $identityId
     * @return Collection | PasswordHistoryEntity[]
     */
    public function allByIdentityId(int $identityId): Collection;
}

