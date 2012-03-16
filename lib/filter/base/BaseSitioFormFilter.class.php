<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Sitio filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseSitioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'titulo'      => new sfWidgetFormFilterInput(),
      'texto'       => new sfWidgetFormFilterInput(),
      'orden'       => new sfWidgetFormFilterInput(),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'profesor_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'titulo'      => new sfValidatorPass(array('required' => false)),
      'texto'       => new sfValidatorPass(array('required' => false)),
      'orden'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('sitio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sitio';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'profesor_id' => 'ForeignKey',
      'titulo'      => 'Text',
      'texto'       => 'Text',
      'orden'       => 'Number',
      'fecha'       => 'Date',
    );
  }
}
