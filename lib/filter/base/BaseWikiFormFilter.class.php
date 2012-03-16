<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Wiki filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseWikiFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'materia_id'  => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => true)),
      'profesor_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'titulo'      => new sfWidgetFormFilterInput(),
      'texto'       => new sfWidgetFormFilterInput(),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'materia_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Materia', 'column' => 'id')),
      'profesor_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'titulo'      => new sfValidatorPass(array('required' => false)),
      'texto'       => new sfValidatorPass(array('required' => false)),
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('wiki_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Wiki';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'materia_id'  => 'ForeignKey',
      'profesor_id' => 'ForeignKey',
      'titulo'      => 'Text',
      'texto'       => 'Text',
      'fecha'       => 'Date',
    );
  }
}
