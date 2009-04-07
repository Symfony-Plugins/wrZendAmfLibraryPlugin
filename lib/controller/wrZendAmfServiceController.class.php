<?php
class wrZendAmfServiceController extends sfWebController
{
  public function initialize($context)
  {
    parent::initialize($context);

    var_dump($this);
  }

  public function dispatch()
  {
    var_dump($this);
  }
}
?>