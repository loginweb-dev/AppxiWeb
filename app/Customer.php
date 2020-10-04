<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'customers';
    protected $fillable = ['phone', 'nit_ci', 'user_id'];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'costumer_id');
    }
}
