<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Banner filter form base class.
 *
 * @package    portal
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseBannerFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'      => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
      'texto'       => new sfWidgetFormFilterInput(),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'titulo'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'texto'       => new sfValidatorPass(array('required' => false)),
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('banner_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banner';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'titulo'      => 'Text',
      'descripcion' => 'Text',
      'texto'       => 'Text',
      'fecha'       => 'Date',
    );
  }
}
