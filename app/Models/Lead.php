<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'company_name',
        'sex',
        'name',
        'surname',
        'address',
        'plz',
        'ort',
        'mobil',
        'telefon',
        'email',
        'comment',
        'date',
        'agent_name',
        'transmission_id',
        'status'
    ];

    public function transmission()
    {
        $this->belongsTo(Transmission::class);
    }
}
