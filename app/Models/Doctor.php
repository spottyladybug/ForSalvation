<?php

namespace App\Models;

use App\User;
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

    protected $hidden = [
        'password'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
