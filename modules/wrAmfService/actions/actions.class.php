<?php

/**
 *
 * @package wrZendAmfServicePlugin
 * @subpackage modules
 * @author Daniel Hürtgen <daniel@higidi.com>
 * @version SVN: $Id$
 */
class wrAmfServiceActions extends sfActions
{
  /**
   * Wrapper action to forward.
   *
   * @param sfWebRequest $request
   */
  public function executeIndex(sfWebRequest $request)
  {
    // forward
  }

  /**
   * Wrapper action to forward.
   *
   * @param sfWebRequest $request
   */
  public function executeDefault(sfWebRequest $request)
  {
    // forward to login action
    $this->forward('wrAmfService', 'index');
  }

  /**
   * Wrapper method for the server
   */
}
?>