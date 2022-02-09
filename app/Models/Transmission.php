<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name'
    ];
    protected $with = ['leads', 'user'];

    public function leads()
    {
        $this->hasMany(Lead::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function file()
    {
        $this->hasOne(File::class);
    }
}
