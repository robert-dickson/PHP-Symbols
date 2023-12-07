<?php

return array (
  'type' => 'class',
  'name' => 'Closure',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Closure',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'Closure class (php.net)',
        'url' => 'https://www.php.net/manual/class.closure.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Closure',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => false,
      'is_protected' => false,
      'is_private' => true,
    ),
    'bind' => 
    array (
      'name' => 'bind',
      'class' => 'Closure',
      'parameters' => 
      array (
        'closure' => 
        array (
          'position' => 0,
          'name' => 'closure',
          'type' => 'Closure',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newThis' => 
        array (
          'position' => 1,
          'name' => 'newThis',
          'type' => '?object',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newScope' => 
        array (
          'position' => 2,
          'name' => 'newScope',
          'type' => 'object|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'static',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Closure',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'bindTo' => 
    array (
      'name' => 'bindTo',
      'class' => 'Closure',
      'parameters' => 
      array (
        'newThis' => 
        array (
          'position' => 0,
          'name' => 'newThis',
          'type' => '?object',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'newScope' => 
        array (
          'position' => 1,
          'name' => 'newScope',
          'type' => 'object|string|null',
          'is_optional' => true,
          'has_default_value' => true,
          'default_value' => 'static',
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => '?Closure',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'call' => 
    array (
      'name' => 'call',
      'class' => 'Closure',
      'parameters' => 
      array (
        'newThis' => 
        array (
          'position' => 0,
          'name' => 'newThis',
          'type' => 'object',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'args' => 
        array (
          'position' => 1,
          'name' => 'args',
          'type' => 'mixed',
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'mixed',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'fromCallable' => 
    array (
      'name' => 'fromCallable',
      'class' => 'Closure',
      'parameters' => 
      array (
        'callback' => 
        array (
          'position' => 0,
          'name' => 'callback',
          'type' => 'callable',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'Closure',
      'has_return_type' => true,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    '__invoke' => 
    array (
      'name' => '__invoke',
      'class' => 'Closure',
      'parameters' => 
      array (
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => true,
  'is_read_only' => false,
);
