<?php

/*
 * Check if wrZendAmfService module is enabled.
 * If not and not particular disabled, set to enabled
 */

// get enabled modules
$sf_enabled_modules = sfConfig::get('sf_enabled_modules');

// check if name is enabled
if (!in_array('wrZendAmfService', $sf_enabled_modules))
{
  // add as enabled
  $sf_enabled_modules[] = 'wrZendAmfService';

  // set config
  sfConfig::set('sf_enabled_modules', $sf_enabled_modules);
}

/*
 * Conntects to the event dispatcher of event:
 * Class: sfWebRequest
 * Event: request.method_not_found
 */
//$this->dispatcher->connect('request.method_not_found', array('wrListenerRequestEvents', 'listenToRequestMethodNotFoundEvent'));

/*
 * Connects to the event dispatcher of event:
 * Class: sfContext
 * Event: context.load_factories
 */
//$this->dispatcher->connect('context.load_factories', array('wrListenerContextEvents', 'listenToConextLoadFactoriesEvent'));
