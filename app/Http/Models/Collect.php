<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Collect extends Model
{
    protected $table = 'collect';
    protected $primaryKey = 'collect_id';
    public $timestamps = false;
    protected $guarded = [];//批量添加需要的指定属性
}