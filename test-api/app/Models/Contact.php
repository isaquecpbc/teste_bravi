<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'type',
        'info',
        'person_id',
    ];

    /**
     * Get the person.
     */
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

}
