<?php

/**
 * PluginKakiage form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginKakiageForm extends BaseKakiageForm
{
  public function setup()
  {
    parent::setup();

    unset($this['id']);
    $this->useFields(array('body'));

    $this->widgetSchema['body'] = new opWidgetFormRichTextareaOpenPNE();
  }
}
