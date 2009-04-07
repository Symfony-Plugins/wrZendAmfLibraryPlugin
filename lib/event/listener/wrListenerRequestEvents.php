<?php

class wrListenerRequestEvents
{
  /**
   * Contains the sfWebRequest object.
   *
   * @var sfWebRequest
   */
  protected static $requestObj = null;

  /**
   * Contains the request method name.
   *
   * @var string
   */
  protected static $method_name = null;

  /**
   * Contains the request method args.
   *
   * @var array
   */
  protected static $method_args = array();

  /**
   * Contains managed method names.
   *
   * @var array
   */
  private static $managed_methods = array(
    'isAmfHttpRequest'
  );

  /**
   * Method listen to the method not found event of the sfRequest class.
   *
   * @param sfEvent $event with eventinformations
   * @return unknown_type
   */
  public static function listenToRequestMethodNotFoundEvent(sfEvent $event)
  {
    // save request object
    self::$requestObj = $event->getSubject();

    // get requested method name from event object
    self::$method_name = $event['method'];

    // get request method args from event object
    self::$method_args = $event['arguments'];


    // method is managed method
    if (!in_array(self::$method_name, self::$managed_methods) || !self::$requestObj instanceof sfWebRequest)
    {
      // set event as procceded
      $event->setProcessed(false);

      // abort
      return ;
    }


    // define empty return var
    $method_return = null;

    // switch method names
    switch (self::$method_name)
    {
      /**
       * Method: self::isAmfHttpRequest();
       */
      case 'isAmfHttpRequest':
        // call method
        $method_return = self::isAmfHttpRequest();

        // continue with next
        break;

      /**
       * Method: default
       */
      default:

        // stop switch
        break;
    }


    //set event as procceded
    $event->setProcessed(true);

    // set event return value
    $event->setReturnValue($method_return);
  }

  /**
   * Method to check wheater request is amf http request.
   *
   * @return boolean true if is amf request, otherwise false
   */
  public static function isAmfHttpRequest()
  {
    // request object isset?
    if (is_null(self::$requestObj))
    {
      // get request from sfContext class
      self::$requestObj = sfContext::getInstance()->getRequest();
    }

    // validate request object
    if (!self::$requestObj instanceof sfWebRequest)
    {
      // abort
      return ;
    }

    // get an return boolean value if is amf http request
    return (self::$requestObj->getHttpHeader('Content-Type')=='application/x-amf' ? true : false);
  }
}
