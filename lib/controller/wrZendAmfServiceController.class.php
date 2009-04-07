<?php
class wrZendAmfServiceController extends sfWebController
{
  public function initialize($context)
  {
    // call parents class initialize method
    parent::initialize($context);

    var_dump($this);
  }
}
?>