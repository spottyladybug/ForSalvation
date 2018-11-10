<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'patronymic', 'phone_number',
        'checkup', 'blood_type', 'last_donation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
