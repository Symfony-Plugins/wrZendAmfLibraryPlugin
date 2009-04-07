<?php

/*
 * Conntects to the event dispatcher of event:
 * Class: sfWebRequest
 * Event: request.method_not_found
 */
$this->dispatcher->connect('request.method_not_found', array('wrListenerRequestEvents', 'listenToRequestMethodNotFoundEvent'));

/*
 * Connects to the event dispatcher of event:
 * Class: sfContext
 * Event: context.load_factories
 */
$this->dispatcher->connect('context.load_factories', array('wrListenerContextEvents', 'listenToConextLoadFactoriesEvent'));
