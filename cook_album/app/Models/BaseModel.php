<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * {@inheritdoc}
     *
     */
    public function __construct()
    {
        $class_name = class_basename(get_class($this));
        $table_name =  str_replace('Model', '', $class_name);

        $this->table = snake_case($table_name);
    }
}
