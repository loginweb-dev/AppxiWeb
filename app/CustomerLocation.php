<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CustomerLocation extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'customer_locations';
    protected $fillable = ['type', 'direction', 'latitud', 'longitud', 'customer_id','maps'];
}
