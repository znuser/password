<?php

namespace ZnUser\Password\Domain;

use ZnCore\Domain\Interfaces\DomainInterface;

class Domain implements DomainInterface
{

    public function getName()
    {
        return 'security';
    }


}

