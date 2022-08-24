<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grandmaster extends Model
{
    use HasFactory;
    protected $table = "grandmaster";
    protected $fillable = ['nama', 'tanggal_lahir', 'rating', 'deskripsi'];
    public $timestamps = false;
}
