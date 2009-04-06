<?php
class wrWebRequestListener {

  /**
   * Contains the request object.
   *
   * @var sfWebRequest
   */
  protected static $requestObj;

  /**
   * Listener method for the request class.
   *
   * @param sfEvent $event
   * @return unknown_type
   */
  public static function listenToRequestMethodNotFoundEvent(sfEvent $event)
  {
    // event not triggered from sfWebRequest
    if (!$event->getSubject() instanceof sfWebRequest)
    {
      // return
      return;
    }

    // resave request object to class constant
    self::$requestObj = $event->getSubject();

    // resave requested method name
    $req_method_name = $event['parameters']['method'];

    // resave request method parameters
    $req_method_params = $event['parameters']['arguments'];

    // switch method name
    switch ($req_method_name)
    {
      // method 'isAmfHttpRequest'
      case 'isAmfHttpRequest':

        // call and return isAmfHttpRequest
        return self::isAmfHttpRequest();

        // continue with next
        break;

      // default
      default:
        // do nothing
        break;
    }
  }

  /**
   * Checks wheater request is amf http request.
   *
   * @return boolean true if amf request, otherwise false
   */
  protected static function isAmfHttpRequest()
  {
    // return if is amf http request
    return (self::$requestObj->getHttpHeader('ContentType') == 'application/x-amf') ? true : false;
  }
}
