<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name','image','price','summary','daystar','dayend','content','titlecontent','content1','gallery'
    ];
    protected $primarykey = 'id';
    protected $table = 'event';
}
