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

<h2><?= \ZnCore\Base\Libs\I18Next\Facades\I18Next::t('user_security', 'restore-password.action.create_password') ?></h2>

<?= $formRender->errors() ?>

<?= $formRender->beginFrom() ?>

<div class="form-group required has-error">
    <?= $formRender->label('email') ?>
    <?= $formRender->input('email', 'text') ?>
    <?= $formRender->hint('email') ?>
</div>
<div class="form-group required has-error">
    <?= $formRender->label('activationCode') ?>
    <?= $formRender->input('activationCode', 'text') ?>
    <?= $formRender->hint('activationCode') ?>
</div>
<div class="form-group required has-error">
    <?= $formRender->label('password') ?>
    <?= $formRender->input('password', 'password') ?>
    <?= $formRender->hint('password') ?>
</div>
<div class="form-group required has-error">
    <?= $formRender->label('passwordConfirm') ?>
    <?= $formRender->input('passwordConfirm', 'password') ?>
    <?= $formRender->hint('passwordConfirm') ?>
</div>
<div class="form-group">
    <?= $formRender->input('save', 'submit') ?>
</div>

<?= $formRender->endFrom() ?>
