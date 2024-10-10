<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected  $table = 'bill';
    protected $primaryKey = 'id_bill';
    protected $fillable = [
           
        'id_bill ','id','subtotal','delivery','date','total'
        
    ];
}
