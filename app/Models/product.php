<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected  $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
           
        'id','category','name','price','image'
        
    ];
   
}
