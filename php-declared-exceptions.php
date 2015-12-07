<?php

$declaredExceptions = array_filter(get_declared_classes(), function($className) {
  return strrpos($className, 'Exception') !== false;
});

var_dump($declaredExceptions);
