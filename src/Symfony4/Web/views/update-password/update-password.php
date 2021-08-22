<?php

/**
 * @var $formView FormView|AbstractType[]
 */

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use ZnCore\Base\Libs\App\Helpers\ContainerHelper;
use ZnLib\Web\Symfony4\MicroApp\Libs\FormRender;

/** @var CsrfTokenManagerInterface $tokenManager */
$tokenManager = ContainerHelper::getContainer()->get(CsrfTokenManagerInterface::class);
$formRender = new FormRender($formView, $tokenManager);
$formRender->addFormOption('autocomplete', 'off');

?>

<h2><?= \ZnCore\Base\Libs\I18Next\Facades\I18Next::t('user_security', 'change-password.action.update_password') ?></h2>

<?= $formRender->errors() ?>

<?= $formRender->beginFrom() ?>

<div class="form-group required has-error">
    <?= $formRender->label('currentPassword') ?>
    <?= $formRender->input('currentPassword', 'password') ?>
    <?= $formRender->hint('currentPassword') ?>
</div>
<div class="form-group required has-error">
    <?= $formRender->label('newPassword') ?>
    <?= $formRender->input('newPassword', 'password') ?>
    <?= $formRender->hint('newPassword') ?>
</div>
<div class="form-group required has-error">
    <?= $formRender->label('newPasswordConfirm') ?>
    <?= $formRender->input('newPasswordConfirm', 'password') ?>
    <?= $formRender->hint('newPasswordConfirm') ?>
</div>
<div class="form-group">
    <?= $formRender->input('save', 'submit') ?>
</div>

<?= $formRender->endFrom() ?>
