<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingSchedule extends Model
{
    /**
     * @var string
     */
    protected $table = 'working_schedule';

    protected $hidden = ['id'];
}
