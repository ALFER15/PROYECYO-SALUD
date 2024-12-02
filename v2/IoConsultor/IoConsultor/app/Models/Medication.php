<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medication extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'description',
        'dosage'
    ];

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
