<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Aviso filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseAvisoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo' => new sfWidgetFormFilterInput(),
      'texto'  => new sfWidgetFormFilterInput(),
      'activo' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'slug'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titulo' => new sfValidatorPass(array('required' => false)),
      'texto'  => new sfValidatorPass(array('required' => false)),
      'activo' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'slug'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aviso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aviso';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'titulo' => 'Text',
      'texto'  => 'Text',
      'activo' => 'Boolean',
      'fecha'  => 'Date',
      'slug'   => 'Text',
    );
  }
}
