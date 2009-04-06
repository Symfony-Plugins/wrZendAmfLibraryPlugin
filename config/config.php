<?php

// connect to listener method from the sfRequest::__call method
$this->dispatcher->connect('request.method_not_found', array('wrWebRequestListener', 'listenToRequestMethodNotFoundEvent'));
