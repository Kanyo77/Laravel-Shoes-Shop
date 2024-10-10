<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class userid extends Model
{
    
    protected  $table = 'userid';
    protected $primaryKey = 'id';

    protected $fillable = 
    [
        'id', 'password',
    ];

   

    use HasFactory;
}
