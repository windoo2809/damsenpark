<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name','pack','phone','email','quanlity',
    ];
    protected $primarykey = 'id';
    protected $table = 'order_ve';
}
