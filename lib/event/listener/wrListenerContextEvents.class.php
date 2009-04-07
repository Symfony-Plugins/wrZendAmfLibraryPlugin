<?php

class wrListenerContextEvents
{
  /*
   * Contains the sfContext object
   *
   * @var sfContext
   */
  protected static $sfContext = null;

  /*
   * Method listen to the load factories event of the sfContext class.
   *
   * @param sfEvent $event with eventinformations
   */
  public static function listenToConextLoadFactoriesEvent(sfEvent $event)
  {
    // save context object
    self::$sfContext = $event->getSubject();

    // get request object
    $request = self::$sfContext->getRequest();

    // check wheater is amf request
    if ($request->isAmfHttpRequest())
    {

    }
  }
}
?>