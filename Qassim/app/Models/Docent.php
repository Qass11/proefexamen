<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docent extends Model
{
    protected $table = 'docent';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname', 'lastname', 'email', 'phone_number'] ;
}
