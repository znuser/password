<?php

namespace ZnUser\Password\Domain\Interfaces\Services;

use ZnCore\Domain\Interfaces\Service\CrudServiceInterface;

interface PasswordHistoryServiceInterface extends CrudServiceInterface
{

    public function isHas(string $password, int $identityId = null): bool;

    public function add(string $password, int $identityId = null);
}

