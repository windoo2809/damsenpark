<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    public $timestamps = true;
    protected $fillable = [
      'code','date','category_id','ve_id',
    ];
    protected $primarykey = 'id';
    protected $table = 've';
}
