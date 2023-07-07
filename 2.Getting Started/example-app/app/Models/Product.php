<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'create_at', 'updated_at'];

    protected $primaryKey = 'id';

    protected $KetType = 'string';

    public $incrementing = false;
}
