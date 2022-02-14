<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $timestamps = true;
    protected $fillable = [
       'number_card','order_ve_id','name_card','date_card','CCV_CVC',
    ];
    protected $primarykey = 'id';
    protected $table = 'pay';
}
