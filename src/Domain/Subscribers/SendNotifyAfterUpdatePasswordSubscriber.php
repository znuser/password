<?php

namespace ZnUser\Password\Domain\Subscribers;

use ZnUser\Password\Domain\Enums\UserActionEventEnum;
use ZnBundle\User\Domain\Events\UserActionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use ZnCore\Domain\Traits\EntityManagerTrait;
use ZnUser\Notify\Domain\Interfaces\Services\NotifyServiceInterface;
use ZnUser\Password\Domain\Enums\UserSecurityNotifyTypeEnum;

class SendNotifyAfterUpdatePasswordSubscriber implements EventSubscriberInterface
{

    use EntityManagerTrait;

    private $notifyService;

    public function __construct(
        NotifyServiceInterface $notifyService
    )
    {
        $this->notifyService = $notifyService;
    }

    public static function getSubscribedEvents()
    {
        return [
            UserActionEventEnum::AFTER_UPDATE_PASSWORD => 'onAfterUpdatePassword',
        ];
    }

    public function onAfterUpdatePassword(UserActionEvent $event)
    {
        $this->notifyService->sendNotifyByTypeName(UserSecurityNotifyTypeEnum::UPDATE_PASSWORD, $event->getIdentityId());
    }
}
