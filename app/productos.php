<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    public $table = "Productos",
    public $primaryKey = "id",
    public $timestamps = false,
    public $guarder = [];
}
