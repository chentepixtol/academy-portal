<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Clave filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseClaveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'clave' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'clave' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('clave_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clave';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'clave' => 'Text',
    );
  }
}
