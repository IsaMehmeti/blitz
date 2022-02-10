<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'location', 'name', 'surname', 'company_name', 'sex',
        'email', 'company', 'mobil', 'addres', 'plz', 'ort', 'created_by_agent'
    ];
}
