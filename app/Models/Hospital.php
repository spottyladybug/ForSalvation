<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'phone_number', 'location_x', 'location_y', 'code',
        'hospital_time_id', 'blood_necessity_id', 'blood_type_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function times()
    {
        return $this->belongsTo(WorkingSchedule::class, 'hospital_time_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloodNecessity()
    {
        return $this->belongsTo(BloodNecessity::class, 'blood_necessity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloodTypes()
    {
        return $this->belongsTo(BloodType::class, 'blood_type_id');
    }
}
