<?php

namespace Adaptcms\FieldSelect\Field;

use Adaptcms\Fields\FieldType;

class FieldSelect extends FieldType
{
  /**
  * Create Field Rules
  *
  * @return array
  */
  public function createFieldRules()
  {
    return [
      'meta.options' => 'required'
    ];
  }
}
