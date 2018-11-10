<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'position', 'login', 'password'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
