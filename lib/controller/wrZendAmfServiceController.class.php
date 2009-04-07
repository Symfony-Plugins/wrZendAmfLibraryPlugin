<?php


class wrZendAmfServiceController extends sfWebController
{

  /**
   * Contains the Zend AMF Server object.
   *
   * @var Zend_Amf_Server
   */
  protected $zendAmfServer = null;


  public function dispatch()
  {

  }

  protected function initZendAMFServer()
  {
    // server already initialized
    if ($this->zendAmfServerObj instanceof Zend_Amf_Server)
    {
      // abort
      return ;
    }
  }
}
?>