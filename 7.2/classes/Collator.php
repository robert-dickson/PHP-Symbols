<?php

return array (
  'type' => 'class',
  'name' => 'Collator',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'Collator',
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
        'name' => 'Collator class (php.net)',
        'url' => 'https://www.php.net/manual/class.collator.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
    'DEFAULT_VALUE' => -1,
    'PRIMARY' => 0,
    'SECONDARY' => 1,
    'TERTIARY' => 2,
    'DEFAULT_STRENGTH' => 2,
    'QUATERNARY' => 3,
    'IDENTICAL' => 15,
    'OFF' => 16,
    'ON' => 17,
    'SHIFTED' => 20,
    'NON_IGNORABLE' => 21,
    'LOWER_FIRST' => 24,
    'UPPER_FIRST' => 25,
    'FRENCH_COLLATION' => 0,
    'ALTERNATE_HANDLING' => 1,
    'CASE_FIRST' => 2,
    'CASE_LEVEL' => 3,
    'NORMALIZATION_MODE' => 4,
    'STRENGTH' => 5,
    'HIRAGANA_QUATERNARY_MODE' => 6,
    'NUMERIC_COLLATION' => 7,
    'SORT_REGULAR' => 0,
    'SORT_STRING' => 1,
    'SORT_NUMERIC' => 2,
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    '__construct' => 
    array (
      'name' => '__construct',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'create' => 
    array (
      'name' => 'create',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => true,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'compare' => 
    array (
      'name' => 'compare',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg2' => 
        array (
          'position' => 1,
          'name' => 'arg2',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sort' => 
    array (
      'name' => 'sort',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arr' => 
        array (
          'position' => 0,
          'name' => 'arr',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'sortWithSortKeys' => 
    array (
      'name' => 'sortWithSortKeys',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arr' => 
        array (
          'position' => 0,
          'name' => 'arr',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'asort' => 
    array (
      'name' => 'asort',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arr' => 
        array (
          'position' => 0,
          'name' => 'arr',
          'type' => 'array',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'flags' => 
        array (
          'position' => 1,
          'name' => 'flags',
          'type' => NULL,
          'is_optional' => true,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getAttribute' => 
    array (
      'name' => 'getAttribute',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'setAttribute' => 
    array (
      'name' => 'setAttribute',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
        'arg2' => 
        array (
          'position' => 1,
          'name' => 'arg2',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getStrength' => 
    array (
      'name' => 'getStrength',
      'class' => 'Collator',
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
    'setStrength' => 
    array (
      'name' => 'setStrength',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getLocale' => 
    array (
      'name' => 'getLocale',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => NULL,
      'has_return_type' => false,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'getErrorCode' => 
    array (
      'name' => 'getErrorCode',
      'class' => 'Collator',
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
    'getErrorMessage' => 
    array (
      'name' => 'getErrorMessage',
      'class' => 'Collator',
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
    'getSortKey' => 
    array (
      'name' => 'getSortKey',
      'class' => 'Collator',
      'parameters' => 
      array (
        'arg1' => 
        array (
          'position' => 0,
          'name' => 'arg1',
          'type' => NULL,
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
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
  'is_cloneable' => false,
  'is_final' => false,
  'is_read_only' => false,
);
