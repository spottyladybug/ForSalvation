<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodNecessity extends Model
{
    /**
     * @var integer
     */
    const NOT_NECESSARY = 0;

    /**
     * @var integer
     */
    const NECESSARY = 1;

    /**
     * @var integer
     */
    const SO_NECESSARY = 2;


    /**
     * @var string
     */
    protected $table = 'blood_necessity';

    /**
     * @var array
     */
    protected $hidden = ['id'];
}
