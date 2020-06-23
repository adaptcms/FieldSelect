<?php

namespace Adaptcms\FieldSelect;

use Adaptcms\Base\Models\Package;

class FieldSelect
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
