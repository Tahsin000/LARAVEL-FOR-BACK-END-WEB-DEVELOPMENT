<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= 'products';
    protected $fillable= ['name', 'quantity', 'price', 'created_at', 'updated_at'];

    protected $primaryKey= 'id';

    protected $keyType= 'string';

    public $incrementing= false;

    public function user(){
        return $this->hasOne(User::class, 'products_id','id');
    }
}
