<?php

/*
 * Check if wrAmfServer module is enabled.
 * If not and not particular disabled, add to enabled
 */
$sf_enabled_modules = sfConfig::get('sf_enabled_modules');
if (!in_array('wrAmfService', $sf_enabled_modules))
{
  // add as enabled
  $sf_enabled_modules[] = 'wrAmfService';

  // set config
  sfConfig::set('sf_enabled_modules', $sf_enabled_modules);
}

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
