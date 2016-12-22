<?php

namespace App\Modules\Backend\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model {

  protected $table = "apps";
  const STATUS_ACTIVE = 'active';
  const STATUS_INACTIVE = 'inactive';

}
