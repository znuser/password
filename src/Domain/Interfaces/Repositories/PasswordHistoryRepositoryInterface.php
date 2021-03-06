<?php

namespace ZnUser\Password\Domain\Interfaces\Repositories;

use ZnUser\Password\Domain\Entities\PasswordHistoryEntity;
use Illuminate\Support\Collection;
use ZnCore\Domain\Interfaces\Repository\CrudRepositoryInterface;

interface PasswordHistoryRepositoryInterface extends CrudRepositoryInterface
{

    /**
     * @param int $identityId
     * @return Collection | PasswordHistoryEntity[]
     */
    public function allByIdentityId(int $identityId): Collection;
}

