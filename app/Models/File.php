<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['filename', 'filetype', 'filesize', 'filepath', 'image'];

    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }
}
