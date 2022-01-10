<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryVe extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name','price',
    ];
    protected $primarykey = 'id';
    protected $table = 'category_ve';
}
