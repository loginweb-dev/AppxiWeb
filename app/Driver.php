<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Driver extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'drivers';
    protected $fillable = ['first_name', 'last_name', 'phone', 'user_id'];
}
