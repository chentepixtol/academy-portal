<?php

/**
 * sfGuardUser form.
 *
 * @package    form
 * @subpackage sf_guard_user
 * @version    SVN: $Id: sfGuardUserForm.class.php 13001 2008-11-14 10:45:32Z noel $
 */
class sfGuardUserForm extends sfGuardUserAdminForm
{
  protected
    $pkName = null;

  public function configure()
  {
    parent::configure();

    unset(
      $this['last_login'],
      $this['created_at'],
      $this['salt'],
      $this['algorithm'],
      $this['is_active'],
      $this['is_super_admin'],
      $this['sf_guard_user_group_list'],
      $this['sf_guard_user_permission_list'],
      $this['enlace'],
      $this['foto']
    );
    
    $this->widgetSchema->setLabel("password_again","Repetir Password");
    
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password']->setOption('required', true);
    $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];
  }
}
