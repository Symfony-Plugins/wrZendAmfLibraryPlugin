<?php

function test()
{
  return 'blub';
}

class wrZendAmfServiceActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    ini_set('include_path', ini_get('include_path').':/private/srv/www/developer/php/www_0/htdocs/symfony_wrZendAmfLibraryPlugin/plugins/wrZendAmfLibraryPlugin/lib/vendor');

    $server = new Zend_Amf_Server();
    $server->addFunction('test');
    $response = $server->handle();

    //echo $response;

    return sfView::NONE;
  }
}


?>