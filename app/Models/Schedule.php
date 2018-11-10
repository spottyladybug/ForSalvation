<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    /**
     * @var array
     */
    protected $fillable = [
        'id_donor', 'id_hospital', 'time', 'free_counts', 'code', 'approval'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'time' => 'datetime:Y-m-d h:mm:ss',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function donor()
    {
        return $this->belongsTo(Donor::class, 'id_donor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'id_hospital');
    }
}
