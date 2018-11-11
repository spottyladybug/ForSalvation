<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersDonateBlood extends Model
{
    protected $table = 'users_donate_blood';

    protected $fillable = ['id_donor', 'all_blood', 'plazma'];

    public $timestamps = false;
}
